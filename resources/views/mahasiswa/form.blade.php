<div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
    <label for="nim" class="control-label">{{ 'Nim' }}</label>
    <input class="form-control" name="nim" type="text" id="nim" value="{{ isset($mahasiswa->nim) ? $mahasiswa->nim : ''}}" >
    {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($mahasiswa->nama) ? $mahasiswa->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telpon') ? 'has-error' : ''}}">
    <label for="telpon" class="control-label">{{ 'Telpon' }}</label>
    <input class="form-control" name="telpon" type="text" id="telpon" value="{{ isset($mahasiswa->telpon) ? $mahasiswa->telpon : ''}}" >
    {!! $errors->first('telpon', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="alamat" type="text" id="alamat" value="{{ isset($mahasiswa->alamat) ? $mahasiswa->alamat : ''}}" >
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
