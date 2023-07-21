<?php
use Illuminate\Support\Facades\Auth;
$user = DB::table('users')->where('id',auth::id() )->first();
if($user->role==1){ ?>
@include('clientes.dashboardCliente');
<?php }else if($user->role==2){ ?>
@include('admin.dashboardAdmin');

<?php } ?>
