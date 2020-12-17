import { Component, Injectable } from '@angular/core';
import { Lista } from 'src/models/Lista';
import { Produto } from 'src/models/Produto';
import { ListaService } from "src/services/ListaService";

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})

export class Tab2Page {
  public listaCompras: Lista = new Lista();
  public produto: Produto = new Produto();

  constructor(
    public listaService: ListaService = new ListaService()
  ) {}

  addValor(){
    this.produto.quantidade += 1;
  }
  
  removeValor(){
    if(this.produto.quantidade > 0){
      this.produto.quantidade -= 1;
    }
  }

  adicionarProduto(produto: Produto){
    this.listaCompras.listaProduto.push(produto);
    this.produto = new Produto();
  }

  criarLista(){
    const retorno = this.listaService.inserirLista(this.listaCompras);
    console.log(retorno);
  }
}
