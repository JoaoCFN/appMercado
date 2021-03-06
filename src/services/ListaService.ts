import { Injectable } from "@angular/core";

import { Lista } from "src/models/Lista";
import { Observable, pipe } from "rxjs";
import { HttpClient } from "@angular/common/http";

@Injectable({
  providedIn: "root",
})
export class ListaService {
    
  // public _http: HttpClient;
  //public apiUrl: string = "http://localhost/appMercado/API/inserir_nova_lista";
  private apiUrl: string = "http://localhost/appMercado/API/listar_listas?listar_tudo=0";

  constructor(private http: HttpClient) {}


  
  listarListas() {
    return  (this.http.get(this.apiUrl));
    
  }

  inserirLista(lista): Observable<Lista> {
    return  this.http.post<Lista>(this.apiUrl, lista);
  }
}
