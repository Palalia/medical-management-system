@extends('principal')
@section('contenido')
    <template v-if="menu==1">
        <buttons></buttons>
    </template>

    <template v-if="menu==2">
        <cards></cards>
    </template>

    <template v-if="menu==3">
        <tabs></tabs>
    </template>
    <template v-if="menu==usuarios">
        <userdashboard :menu.sync="menu"></userdashboard>
    </template>
    <template v-if="menu==4">
        <usercreate></usercreate>
    </template>
@endsection
