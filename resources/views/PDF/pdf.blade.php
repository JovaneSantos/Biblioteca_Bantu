
                <div class="card">
                    <div class="card-head" style="position:relative">
                            <div  style="position-absolute; display:block;float:left;margin-top:-70px">
                                <h4 class="card-header" style="font-weight:bold; color:black;">Recibo de Vencimento</h4>
                            </div>
                            <div  style="width:60px; height:90px position-absolute; display:block;float:right;margin-top:-70px">
                                <img src="img/oficial.png" alt="" style="width: 90px; height:110px">
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <hr>

                            <div class="row" style="justify-content: center">
                                <div class="col-md-4">
                                    <p><span style="font-weight: 900; ">Nome: </span> {{ $fun->nome}}</p>
                                    <p><span style="font-weight: 900; ">Empresa:</span>{{ empresa( $fun->id_empresa) }}</p>
                                    <p><span style="font-weight: 900; ">Data fecho:</span> {{date('d/m/y', strtotime($mm->created_at))}}</p>
                                    <p><span style="font-weight: 900; ">Cod. Recibo: </span>{{ $mm->codigo }}</p><span></span>
                                </div>
                                <div class="col-md-4">
                                    <p><span style="font-weight: 900; ">Período:</span>
                                        @if($mm->mes==1)
                                                Janeiro
                                            @elseif ($mm->mes==2)
                                                Fevereiro
                                            @elseif ($mm->mes==3)
                                                Março
                                            @elseif ($mm->mes==4)
                                            Abril
                                            @elseif ($mm->mes==5)
                                                Maio
                                            @elseif ($mm->mes==6)
                                                Junho
                                            @elseif ($mm->mes==7)
                                                Julho
                                            @elseif ($mm->mes==8)
                                                Agosto
                                            @elseif ($mm->mes==9)
                                                Setembro
                                            @else
                                                ' '
                                            @endif
                                    </p>
                                    <p><span style="font-weight: 900; ">Vencimento:</span> {{number_format($mm->s_base,'2',',','.')}} KZ</p>
                                    <p><span style="font-weight: 900; ">Departamento: </span> {{ $dep->nome}}</p>
                                    <p><span style="font-weight: 900; ">Venc/Hora: </span> {{number_format($mm->s_base/22,'0',',','.')}} KZ</p>
                                </div>
                                <div class="col-md-4">
                                    <p><span style="font-weight: 900; ">Nº do BI: </span></p><span></span>
                                    <p><span style="font-weight: 900; ">Nº de Dias úteis:</span> {{ 22 }}</p>
                                    <p><span style="font-weight: 900; ">Categória:</span>{{ categoria_nome($fun->id_categoria)}}</p>
                                    <p><span style="font-weight: 900; ">S.iliquido:</span> {{number_format((($mm->s_base) * (0.03)),'2',',','.')}} kz</p>

                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <hr>

                            <div class="row">
                                <table class="table table-hover table-bordered">
                                    <thead class="table-dark">
                                    <tr>
                                        <th scope="col" class="text-light">#codig</th>
                                        <th scope="col" class="text-light">Data</th>
                                        <th scope="col" class="text-light">Descricao</th>
                                        <th scope="col" class="text-light">Remuneração</th>
                                        <th scope="col" class="text-light">Desconto</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ( $sala as $sala )
                                    <tr>
                                        <th scope="row">{{ isset($sala->desconto)? 'D'.$sala->id:'R'.$sala->id }}</th>
                                        <td>{{date('d/m/y', strtotime($sala->created_at))}}</td>
                                        <td>{{ $sala->descricao }}</td>
                                        <td>{{ isset($sala->remuneracao)? number_format($sala->remuneracao,'0',',','.') : " "}}</td>
                                        <td>{{ isset($sala->desconto)? $sala->desconto : " "}}</td>
                                    </tr>
                                    @endforeach

                                        <tr>
                                            <th scope="row">R00</th>
                                            <td>10/10/23</td>
                                            <td>IRT</td>
                                            <td></td>
                                            <td>{{ number_format($mm->irt,'0',',','.')}}</td>
                                        </tr>

                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <br>
                                        <br>

                                        <td style="font-weight:bold;">Total</td>
                                        <td>{{$mm -> t_remuneracao}}</td>
                                        <td>{{ ($mm ->t_desconto >0)? $mm ->t_desconto : number_format($mm->irt,'2',',','.') }} KZ</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container">
                            <hr>

                            <div class="row mt-5">
                                <div class="col-md-12 text-center mb-5 h4 text-dark">
                                    <div class="col-md-12 text-center mb-5 h4 text-dark">
                                        Formas de pagamento
                                    </div>
                                </div>

                            <table class="table table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col" class="text-light">100%</th>
                                        <th scope="col" class="text-light">Formas de Pagamento</th>
                                        <th scope="col" class="text-light">Moeda</th>
                                        <th scope="col" class="text-light">Total Pago:(KZ)</th>
                                        <th scope="col" class="text-light">Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><p> Remunerado</p></td>
                                    <td><p style=""><span>Trensferência:</span></p></td>
                                    <td><span>Kz:</span></td>
                                    <td><span></span>{{ number_format((($mm->s_base)+ $mm->t_remuneracao) - ($mm->t_desconto + ($mm->s_base) * (0.03) + $mm->irt),2,',','.')}}</td>
                                    <td><span></span>{{ number_format((($mm->s_base)+ $mm->t_remuneracao) - ($mm->t_desconto + ($mm->s_base) * (0.03) + $mm->irt),2,',','.')}}</td>
                                  </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>

                    </div>
                </div>



