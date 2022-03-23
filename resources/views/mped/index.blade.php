@extends('layouts.admin')

@section('content')
<div class="data">
    <div class="heading">Male Pedigrees Recorded in Database
        <br/>
        <hr>
    </div>
    <table id="example" class="hover" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Call Name</th>
                <th>Registered Name</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($mpeds as $mped )
            
            <tr>
                <td class="tblelst">{{ $mped->id }}</td>
                <td class="tblelst">{{ $mped->callName }}</td>
                <td class="tblelst">{{ $mped->regName }}</td>
                <td> <a href="{{ route('mped.show', ['mped' => $mped->id]) }}"> <img src="{{ asset('images/view.png') }}"  alt=""></a></td>
                <td> <a href="{{ route('mped.edit', ['mped' => $mped->id]) }}"> <img src="{{ asset('images/edit.png') }}"  alt=""></a></td>
                <td><a href="{{ route('mped.edit', ['mped' => $mped->id]) }}"> <img src="{{ asset('images/delete.png') }}"  alt=""></a></td>
                
            </tr>
        @endforeach

        </tbody>
        {{-- <tfoot>
            <tr>
                <th>Call Name</th>
                <th>Registered Name</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot> --}}
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
$('#example').DataTable();
} );
</script>
@endsection