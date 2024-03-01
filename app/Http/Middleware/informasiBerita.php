<?php

namespace App\Http\Middleware;

use App\Models\berita;
use Closure;
use Illuminate\Http\Request;

class informasiBerita
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $data = $request->attributes->get('data');
        $beritaUnggulan = berita::with('kateber')->take(5)->get();
        $beritaTerbaru = berita::with('kateber')->latest()->take(5)->get();
        $data = [
            ...$data,
            'beritaUnggulan' => $beritaUnggulan,
            'beritaTerbaru' => $beritaTerbaru
        ];
        $request->attributes->add(['data' => $data]);
        return $next($request);
    }
}
