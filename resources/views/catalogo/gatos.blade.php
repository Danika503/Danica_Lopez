@extends('layaut.master')
@section('content')
<h1> {{ $msg }} </h1>
<table>
        <tr>
           <td>
            <div class="card" style="width: 18rem;">
                <img src="https://geant.vteximg.com.br/arquivos/ids/204066-1000-1000/630201.jpg?v=636384834941470000" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alimento para gatos </h5>
                    <p class="card-text">@foreach ($alm as $a)
                                       <li> {{ $a }} </li>
                                         @endforeach
                                            </ul></p>
                    <a href="#" class="btn btn-primary">comprar</a>
                </div>
            </div>

            </td>

            <td>
            <div class="card" style="width: 18rem;">
                <img src="https://i.ytimg.com/vi/QiF4I2_-d_s/maxresdefault.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">juguetes para gatos</h5>
                    <p class="card-text"><ul>
                                            @foreach ($jug as $j)
                                            <li> {{ $j }} </li>
                                            @endforeach
                                            </ul></p>
                    <a href="#" class="btn btn-primary">comprar</a>
                </div>
            </div>

            </td>
            <td>
                <div class="card" style="width: 18rem;">
                    <img src="https://mundohuella.com/21813-thickbox_default/comedero-antideslizante-blossom-verde.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Comedero Antideslizante</h5>
                        <p class="card-text">@foreach ($com as $c)
                                <li> {{ $c }} </li>
                                @endforeach
                                </ul></p>
                        <a href="#" class="btn btn-primary">comprar</a>
                    </div>
                </div>
            </td>    
        
        </tr>
    </table>   






@stop
