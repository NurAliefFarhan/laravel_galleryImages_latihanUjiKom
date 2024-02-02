<?php

namespace App\Http\Controllers;

use App\Models\gallery_photo;
use App\Models\album;
use App\Models\User;
use App\Models\Images;
use App\Models\LikeImages;
use App\Models\KomentarImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; // Import Carbon untuk manipulasi waktu


class GalleryPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $album = album::all();
        return view('gallery.home', compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function album()
    {
        return view('gallery.album');
    }
    public function createAlbum(Request $request)
    {
        $request->validate([
            'nama_album' => 'required|min:3|max:25',
            'deskripsi' => 'required',
            'tanggal_dibuat' => 'required',
        ],[
            'username.required' => 'Kolom username harus di isi',
            'deskripsi.required' => 'Kolom deskripsi harus di isi',
            'nama_lengkap.required' => 'Kolom nama lengkap harus di isi',
        ]);
        // Mendapatkan ID user yang sedang login
        $userID = Auth::id();

        album::create([
            "userID" => $userID,
            'nama_album' => $request->nama_album,
            'deskripsi' => $request->deskripsi,
            'tanggal_dibuat' => $request->tanggal_dibuat,
        ]);
        return redirect('/uji_kom/home')->with('successAddAlbum', 'Anda telah berhasil membuat album!');
    }
    public function editAlbum(Request $request, $id)
    {
        $album = album::where('id', $id)->first();
        return view('gallery.album', compact('album'));
    }
    public function updateAlbum(Request $request, $id)
    {
        $request->validate([
            'nama_album' => 'required|min:3|max:25',
            'deskripsi' => 'required',
            'tanggal_dibuat' => 'required',
        ],[
            'username.required' => 'Kolom username harus di isi',
            'deskripsi.required' => 'Kolom deskripsi harus di isi',
            'nama_lengkap.required' => 'Kolom nama lengkap harus di isi',
        ]);
        // Mendapatkan ID user yang sedang login
        $userID = Auth::id();

        album::where('id', $id)->update([
            "userID" => $userID,
            'nama_album' => $request->nama_album,
            'deskripsi' => $request->deskripsi,
            'tanggal_dibuat' => $request->tanggal_dibuat,
        ]);
        return redirect('/uji_kom/home')->with('successUpdateAlbum', 'Anda telah berhasil mengupdate album!');
    }
    
    public function images(Request $request, $id)
    {
        $album = album::where('id', $id)->first();
        $images = Images::where('albumID', $album->id)->get();
        // $likeImages = LikeImages::where('iamgeID', $images->id)->get();
        $dataImages = Images::all();
        // $countLikeImages = LikeImages::where('imageID', $dataImages->id)->count();
        $countLikeImages = $dataImages->sum(function ($image) {
            // Menggunakan relasi likes pada model Images untuk menghitung jumlah like
            return $image->likes->count();
        });
        // dd($dataImages);
        // dd($countLikeImages);
        return view('gallery.images', compact('album', 'images', 'countLikeImages'));
    }

    public function createImages(Request $request, $id)
    {
        $album = album::where('id', $id)->first();
        return view('gallery.createImages', compact('album'));
    }

    public function createImagesPost(Request $request, $id)
    {
        $request->validate([
            'judul_image' => 'required|min:3|max:25',
            'deskripsi_image' => 'required',
            'lokasi_file' => 'required|image|mimes:jpg,png,jpeg|max:5048',
        ],[
            'judul_image.required' => 'Kolom judul image harus di isi',
            'deskripsi_image.required' => 'Kolom deskripsi image harus di isi',
            'lokasi_file.required' => 'Image harus diisi',
            'lokasi_file.image' => 'File yang diupload harus berupa gambar',
            'lokasi_file.mimes' => 'File yang diupload harus berformat jpg,png,jpeg',
            'lokasi_file.max' => 'File yang diupload tidak boleh lebih dari 5 MB',
        ]);
    
        $album = album::where('id', $id)->first();
    
        if ($request->hasFile('lokasi_file') && $request->file('lokasi_file')->isValid()) {
            // Generate nama unik untuk gambar
            $image_name = time().'_'.$request->file('lokasi_file')->getClientOriginalName();
    
            // Simpan gambar ke lokasi yang ditentukan
            $request->file('lokasi_file')->storeAs('image', $image_name, 'public');
    
            Images::create([
                "albumID" => $album->id,
                "userID" => Auth::id(),
                'judul_image' => $request->judul_image,
                'deskripsi_image' => $request->deskripsi_image,
                'tanggal_unggah' => Carbon::now(),
                'lokasi_file' => 'storage/image/'.$image_name,
            ]);
    
            return redirect()->route('uji_kom.images', ['id' => $album->id])->with('successAddImage', 'Anda telah berhasil menambahkan image!');
        } else {
            return redirect()->back()->withErrors(['lokasi_file' => 'Gagal mengunggah file atau file tidak valid.']);
        }
    }

    public function editImages(Request $request, $id)
    {
        $album = album::where('id', $id)->first();
        $images = Images::where('id', $id)->first();
        return view('gallery.createImages', compact('images', 'album'));
    }
    
    public function updateImages(Request $request, $id)
    {
        $request->validate([
            'judul_image' => 'required|min:3|max:25',
            'deskripsi_image' => 'required',
            'lokasi_file' => 'required|image|mimes:jpg,png,jpeg|max:5048',
        ],[
            'judul_image.required' => 'Kolom judul image harus di isi',
            'deskripsi_image.required' => 'Kolom deskripsi image harus di isi',
            'lokasi_file.required' => 'Image harus diisi',
            'lokasi_file.image' => 'File yang diupload harus berupa gambar',
            'lokasi_file.mimes' => 'File yang diupload harus berformat jpg,png,jpeg',
            'lokasi_file.max' => 'File yang diupload tidak boleh lebih dari 5 MB',
        ]);

        $images = Images::where('id', $id)->first();

        if (!$images) {
            return redirect()->back()->withErrors(['error' => 'Image tidak ditemukan.']);
        }

        if ($request->hasFile('lokasi_file') && $request->file('lokasi_file')->isValid()) {
            // Generate nama unik untuk gambar
            $image_name = time() . '_' . $request->file('lokasi_file')->getClientOriginalName();

            // Simpan gambar ke lokasi yang ditentukan
            $request->file('lokasi_file')->storeAs('image', $image_name, 'public');

            // Perbarui record di database
            Images::where('id', $id)->update([
                "userID" => Auth::id(),
                'judul_image' => $request->judul_image,
                'deskripsi_image' => $request->deskripsi_image,
                'tanggal_unggah' => Carbon::now(),
                'lokasi_file' => 'storage/image/' . $image_name,
            ]);

            return redirect()->route('uji_kom.images', ['id' => $images->albumID])->with('successUpdateImage', 'Anda telah berhasil mengupdate image!');
        } else {
            return redirect()->back()->withErrors(['lokasi_file' => 'Gagal mengunggah file atau file tidak valid.']);
        }
    }



    public function deleteImages(Request $request, $id)
    {
        Images::where('id', $id)->delete();
        return redirect()->back()->with('successDeleteImage', 'Berhasil menghapus Image!');

    }
    public function deleteAlbum(Request $request, $id)
    {        
        Images::where('albumID', $id)->delete();
        album::where('id', $id)->delete();

        return redirect()->back()->with('successDeleteAlbum', 'Berhasil menghapus Album!');
    }



    // like images 
    public function likeImages(Request $request, $id)
    {
        $album = Album::where('id', $id)->first();
        $imageID = $id;
        $userID = Auth::id();

        // Cek apakah user sudah memberikan like sebelumnya
        $existingLike = LikeImages::where('userID', $userID)
                                    ->where('imageID', $imageID)
                                    ->first();

        if ($existingLike) {
            // Jika sudah memberikan like, hapus like tersebut (unlike)
            $existingLike->delete();
            return redirect()->back()->with('likeImages', 'Anda telah menghapus like!');
        } else {
            // Jika belum memberikan like, buat like baru
            LikeImages::create([
                "userID" => $userID,
                'imageID' => $imageID,
                'tanggal_like' => Carbon::now(),
            ]);

            return redirect()->back()->with('likeImages', 'Anda memberikan like!');
        }
    }



    public function messageImages(Request $request, $id)
    {
        $album = album::where('id', $id)->first();
        // $images = Images::where('id', $id)->first();
        $images = Images::where('id', (int)$id)->first();
        
        // $messages = KomentarImages::where('imageID', $id)->get();
        $messages = KomentarImages::where('imageID', $id)->with('user')->get();
        // dd($message);
        return view('gallery.message', compact('images', 'album', "messages"));
    }

    public function messageImagesPost(Request $request, $id)
    {
        $request->validate([
            'komentar' => 'required|min:3',
        ],[
            'komentar.required' => 'Kolom komentar harus di isi',
        ]);
        // $imageID = $id;

        KomentarImages::create([
            "userID" => Auth::id(),
            'imageID' => $id,
            'komentar' => $request->komentar,
            'tanggal_komentar' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        // dd($coba);
        return redirect()->back()->with('successCreateMessage', 'Anda telah berhasil memberi komentar!');
    }

    public function deleteMessageImages(Request $request, $id)
    {
        KomentarImages::where('id', $id)->delete();
        return redirect()->back()->with('successDeleteMessageImage', 'Berhasil menghapus komentar!');

    }

    public function editMessageImages(Request $request, $id)
    {
        $album = album::where('id', $id)->first();
        $message_edit = KomentarImages::where('id', $id)->first();
        $messages = KomentarImages::where('imageID', $id)->with('user')->get();
        $images = Images::where('id', $message_edit->imageID)->first();
        // dd($images);
        return view('gallery.editMessage', compact('images', 'album', "messages", 'message_edit'));
    }

    public function messageImagesUpdate(Request $request, $id)
{
    $request->validate([
        'komentar' => 'required|min:3',
    ], [
        'komentar.required' => 'Kolom komenkomentar harus diisi',
    ]);

    // Pastikan model KomentarImages sudah diimport di bagian atas file.
    $komentarImage = KomentarImages::find($id);

    if (!$komentarImage) {
        // Handle jika entri tidak ditemukan
        return abort(404);
    }

    // Gunakan metode update dengan menyertakan nama kolom yang benar
    $updateResult = KomentarImages::where('id', $id)->update([
        'userID' => Auth::id(),
        'komentar' => $request->komentar,
        'tanggal_komentar' => now()->toDateTimeString(),
    ]);

    if (!$updateResult) {
        // Handle jika proses update gagal
        return redirect()->back()->with('error', 'Gagal melakukan pembaruan data.');
    }

    // Ambil ID image yang terkait dengan komentar
    $imageID = $komentarImage->imageID;

    // Redirect kembali ke halaman messageImages dengan ID image yang benar
    return redirect()->route('uji_kom.messageImages', ['id' => $imageID])->with('successUpdateMessage', 'Anda telah berhasil mengupdate komentar!');
}















    
    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(gallery_photo $gallery_photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery_photo $gallery_photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallery_photo $gallery_photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery_photo $gallery_photo)
    {
        //
    }
}
