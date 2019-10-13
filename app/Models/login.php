<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use App\Models\profile;
class login extends Model
{
    protected $table = "login";
    public $timestamps = false;
    protected $primaryKey = "id";


    protected $fillable = [
        'id', 
        'username', 
        'password',
        'email_verified_at',
        ];

    public static function register($request)
    {
        
        if ($request->file('picture')) {
            File::delete(public_path($request->current_img));

            $path = public_path('images/profile');
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }

            $image       = $request->file('picture');
            $imageName    = uniqid(). '.' . $image->getClientOriginalExtension();        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(256, null, function ($constraint)  {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('images/profile/' .$imageName));
        }
        
        $login = login::create([
            'username'  => $request->username,
            'password'  => bcrypt($request->password),
        ]);
        

        profile::create([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'birth'     =>  $request->birth,
            'phone'     =>  $request->phone,    
            'picture'   => 'images/profile/'.$imageName,
            'gender'    =>  $request->gender,
            'address'   =>  $request->address,
            'login_id'  =>  $login->id,
        ]);
    }
}
