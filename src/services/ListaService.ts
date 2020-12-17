import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Lista } from 'src/models/Lista';
import { Observable } from 'rxjs';

@Injectable({
    'providedIn': 'root',
})

export class ListaService{
    // public _http: HttpClient;
    public apiUrl: string = "http://localhost/appMercado/API/inserir_nova_lista";

    constructor(private _http: HttpClient){
    }

    inserirLista(lista): Observable<Lista>{
        console.log(this._http);
        console.log(this.apiUrl);
        console.log(lista);
        return this._http.post<Lista>(this.apiUrl, lista);
    }
}