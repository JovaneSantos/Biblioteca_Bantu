

<div class="row">
    <div class="col-sm-12">
        <div class="form-group form-group-default">
            <label>Categória</label>
            <input value="{{ (isset( $cai_ele->nome)?  $cai_ele->nome : '') }}" id="addName" type="text" class="form-control" placeholder="Nome"  required  name="nome">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group form-group-default">
            <label>Salário Base</label>
            <input value="{{ (isset( $cai_ele->salario_base)?  $cai_ele->salario_base : '') }}" id="addName" type="number" class="form-control" placeholder="Nome"  required  name="salario_base">
        </div>
    </div>
</div>

