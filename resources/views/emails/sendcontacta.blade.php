@extends('emails.emaillayout')
@section('title')
Consulta desde la web
@stop
@section('description')
Descripción de la consulta
@stop
@section('content')
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><strong>Consulta de {{ $nombre }} desde la web.</strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#E2E2E2">
            <tr>
              <td bgcolor="#F4F4F4">Nombre:</td>
              <td width="450" bgcolor="#FFFFFF">{{ $nombre }}</td>
            </tr>
            <tr>
              <td bgcolor="#F4F4F4">Teléfono:</td>
              <td bgcolor="#FFFFFF">{{ $telefono }}</td>
            </tr>
            <tr>
              <td bgcolor="#F4F4F4">E-mail:</td>
              <td bgcolor="#FFFFFF">{{ $email }}</td>
            </tr>
            <tr>
              <td bgcolor="#F4F4F4">Consulta:</td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td height="200" colspan="2" valign="top" bgcolor="#FFFFFF">
                {{ $mensaje }}
              </td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
@endsection