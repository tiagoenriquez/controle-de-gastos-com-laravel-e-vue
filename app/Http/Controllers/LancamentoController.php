<?php

namespace App\Http\Controllers;

use App\Http\Resources\LancamentoListadoResource;
use App\Http\Resources\LancamentoUnicoResource;
use App\Models\Lancamento;
use Exception;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Inertia\Inertia;
use Inertia\Response;

class LancamentoController extends Controller
{
    function atualizar(int $id, Request $request): HttpResponse
    {
        try {
            $lancamento = Lancamento::find($id);
            $lancamento->update($request->all());
            return response("Lançamento atualizado com sucesso");
        } catch (Exception $exception) {
            return response("Erro: " . $exception->getMessage(), 409);
        }
        
    }

    function cadastrar(): Response
    {
        return Inertia('cadastro');
    }

    function editar(int $id): Response
    {
        try {
            $lancamento = new LancamentoUnicoResource(Lancamento::find($id));
            return Inertia('edicao', ['lancamento' => $lancamento]);
        } catch (Exception $exception) {
            return response("Erro: " . $exception->getMessage(), 409);
        }
    }

    function excluir(int $id): HttpResponse
    {
        try {
            $lancamento = Lancamento::find($id);
            $lancamento->delete();
            return response("Lançamento excluido com sucesso");
        } catch (Exception $exception) {
            return response("Erro: " . $exception->getMessage(), 409);
        }
    }

    function inserir(Request $request): HttpResponse
    {
        try {
            $lancamento = Lancamento::create($request->all());
            $lancamento->save();
            return response("Lançamento inserido com sucesso");
        } catch (Exception $exception) {
            return response("Erro: " . $exception->getMessage(), 409);
        }
    }

    function listar(): Response
    {
        try {
            $lancamentos = LancamentoListadoResource::collection(Lancamento::all());
            return Inertia('lista', ['lancamentos' => $lancamentos]);
        } catch (Exception $exception) {
            return response("Erro: " . $exception->getMessage(), 409);
        }
    }
}
