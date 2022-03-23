@extends('layouts.admin')

@section('content')
<div class="data">
    <div class="heading">Female Pedigrees Recorded in Database
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
        @foreach ($fpeds as $fped )
            
            <tr>
                <td class="tblelst">{{ $fped->id }}</td>
                <td class="tblelst">{{ $fped->callName }}</td>
                <td class="tblelst">{{ $fped->regName }}</td>
                <td> <a href="{{ route('fped.show', ['fped' => $fped->id]) }}"> <img src="{{ asset('images/view.png') }}" alt="" class="tblbutton"></a></td>
                <td> <a href="{{ route('fped.edit', ['fped' => $fped->id]) }}"> <img src="{{ asset('images/edit.png') }}" alt="" class="tblbutton"></a></td>
                <td> <a href="{{ route('fped.edit', ['fped' => $fped->id]) }}"> <img src="{{ asset('images/delete.png') }}" alt="" class="tblbutton"></a></td>
                
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