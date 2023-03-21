
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-group-default">
            <label>Nome</label>
            <input value="{{ isset($users->name)? $users->name : ''}}" required id="addName" type="text" class="form-control" placeholder="Nome" name="nome">
        </div>
        @if ($errors->has('nome'))
            <div class="alert alert-danger">
                {{ $errors->first('nome') }}
            </div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="form-group form-group-default">
             <input value="{{ isset($users->imagem)? $users->imagem: '' }}" type="file" name="imagem" class="form-control" id="">
        </div>
     </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-group-default">
            <label>Nome de usuario</label>
            <input value="{{ isset($users->username)? $users->username: '' }}" required id="addName" type="text" class="form-control" placeholder="username" name="username">
        </div>
        @if ($errors->has('username'))
            <div class="alert alert-danger">
                {{ $errors->first('username') }}
            </div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="input-group-append form-group ">
            <input value="{{ isset($users->email)? $users->email: '' }}" required type="email"class="form-control" name="email" id=""><span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group form-group-default">
            <label>Perifis</label>
                <select class="form-control" name="perfil" id="">
                    <option  value="{{ isset($users->perfil)? $users->perfil: '' }}">{{ isset($users->perfil)? $users->perfil: '' }}</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Gestor de Recursos Humanos">Gestor de Recursos Humanos</option>
                    <option value="Usuário Normal">Usuário Normal</option>
                    <option value="Chef de Departamento">Chef de Departamento</option>
                </select>
        </div>
     </div>
</div>





