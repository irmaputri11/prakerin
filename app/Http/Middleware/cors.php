<?php

namespace App\Http\Middleware;

use Closure;

class cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
        -> header ('Access-Control-Allow-Origin', '*') 
      -> header ('Access-Control-Allow-Metode',' DAPATKAN, POST, PUT, HAPUS, OPSI ') 
      -> header ('Akses-Kontrol-Izinkan Header',' X-Diminta-Dengan, Tipe Konten, X-Token-Auth, Otorisasi ') ; 
    }
}
