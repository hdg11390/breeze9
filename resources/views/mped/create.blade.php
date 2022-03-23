@extends('layouts.admin')

@section('content')

<h1 class="h1style">Add a Male Pedigree to Database</h1>


<form action="{{ route('mped.store') }}" method="POST">
@csrf
<div class="stag">
    <label for="callName">Call Name:</label>
    <input type="text" id="callName"  name="callName"
    class="cname"
     value="{{ old('callName', $mped->callName ?? null) }}"
     >
    <br/>
    <br/>
    <div class="Table">
          
      <table class="tg">
    <tbody>
    <tr>
        <td class="tg-0lax" rowspan="8">
        <label for="regName">Registered Name:</label>
        <br />
        <input type="text" id="regName" name="regName"
        class="field"
    value="{{ old('regName', $mped->regName ?? null) }}"
        >
        </td>

        <td class="tg-0lax" rowspan="4">
            <label for="sire">Sire:</label>
            <br />
            <input type="text" id="sire" name="sire"
            class="field"
        value="{{ old('sire', $mped->sire ?? null) }}">
        </td>

        <td class="tg-0lax" rowspan="2">
            <label for="sFather">Sire's Father:</label>
            <br />
            <input type="text" id="sFather" name="sFather"
            class="field"
        value="{{ old('sFather', $mped->sFather ?? null) }}">
        </td>

        <td class="tg-0lax">
            <label for="sfFather">Sire's Grandfather(F):</label>
            <br />
            <input type="text" id="sfFather" name="sfFather"
            class="field"
        value="{{ old('sfFather', $mped->sfFather ?? null) }}">
        </td>

    </tr>
    <tr>
        <td class="tg-0lax">
            <label for="sfMother">Sire's Grandmother(F):</label>
            <br />
            <input type="text" id="sfMother" name="sfMother"
            class="field"
        value="{{ old('sfMother', $mped->sfMother ?? null) }}">
        </td>
    </tr>
    <tr>

        <td class="tg-0lax" rowspan="2">
            <label for="sMother">Sire's Mother:</label>
            <br />
            <input type="text" id="sMother" name="sMother"
            class="field"
        value="{{ old('sMother', $mped->sMother ?? null) }}">
        </td>

        <td class="tg-0lax">
            <label for="smFather">Sire's Grandfather(M):</label>
            <br />
            <input type="text" id="smFather" name="smFather"
            class="field"
            value="{{ old('smFather', $mped->smFather ?? null) }}">
        </td>
    </tr>
    <tr>
        <td class="tg-0lax">
            <label for="smMother">Sire's Grandmother(M):</label>
            <br />
            <input type="text" id="smMother" name="smMother"
            class="field"
        value="{{ old('smMother', $mped->smMother ?? null) }}">
        </td>
    </tr>
    <tr>

        <td class="tg-0lax" rowspan="4">
            <label for="dame">Dame:</label>
            <br />
            <input type="text" id="dame" name="dame"
            class="field"
        value="{{ old('dame', $mped->dame ?? null) }}">
        </td>

        <td class="tg-0lax" rowspan="2">
            <label for="dFather">Dames's Father:</label>
            <br />
            <input type="text" id="dFather" name="dFather"
            class="field"
        value="{{ old('dFather', $mped->dFather ?? null) }}">
        </td>
        <td class="tg-0lax">
            <label for="dfFather">Dames's Grandfather(F):</label>
            <br />
            <input type="text" id="dfFather" name="dfFather"
            class="field"
        value="{{ old('dfFather', $mped->dfFather ?? null) }}">
        </td>
    </tr>
    <tr>
        <td class="tg-0lax">
            <label for="dfMother">Dames's Grandmother(F):</label>
            <br />
            <input type="text" id="dfMother" name="dfMother"
            class="field"
        value="{{ old('dfMother', $mped->dfMother ?? null) }}">
        </td>
    </tr>
    <tr>
        <td class="tg-0lax" rowspan="2">
            <label for="dMother">Dames's Mother:</label>
            <br />
            <input type="text" id="dMother" name="dMother"
            class="field"
        value="{{ old('dMother', $mped->dMother ?? null) }}">
        </td>
        <td class="tg-0lax">
            <label for="dmFather">Dames's Grandfather(M):</label>
            <br />
            <input type="text" id="dmFather" name="dmFather"
            class="field"
        value="{{ old('dmFather', $mped->dmFather ?? null) }}">
        </td>
    </tr>
    <tr>
        <td class="tg-0lax">
            <label for="dmMother">Dames's Grandmother(M):</label><
            <br />
            <input type="text" id="dmMother" name="dmMother"
            class="field"
        value="{{ old('dmMother', $mped->dmMother ?? null) }}">
            
        </td>
    </tr>
    <tr>

    </table>
      <br />
       <input type="submit" value="Add Pedigree to Database" class="myButton">

     
  </form>
</div>



@endsection