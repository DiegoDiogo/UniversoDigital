<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkAcessData
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
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Permite acesso a usuários com id_perfil == 1 ou requisições AJAX
            if (Auth::user()->id_perfil == 1 || $request->ajax()) {
                return $next($request);
            }
        }

        // Caso contrário, redireciona ou retorna uma mensagem de erro
        return redirect()->route('acessoRestrito')->with('error', 'Acesso restrito a usuários autorizados.');
    }
}