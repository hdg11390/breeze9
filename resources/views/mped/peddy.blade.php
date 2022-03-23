<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">

    <title>Pedigree of</title>
  </head>
  <body>
  <h2>Pedigree of:</h2>
  <h1 style="text-align:center">Staghorn's Fireball a.k.a. Bourbon</h1>
  <div class="stag">

<table class="tg">
<tbody>
  <tr>
    <td class="tg-0lax" rowspan="8">{{$malepedigrees->regName}}</td>
    <td class="tg-0lax" rowspan="4">{{$malepedigrees->sire}}</td>
    <td class="tg-0lax" rowspan="2">{{$malepedigrees->sFather}}</td>
    <td class="tg-0lax">{{$malepedigrees->sfFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$malepedigrees->sfMother}}</td>
  </tr>
  <tr>
    <td class="tg-0lax" rowspan="2">{{$malepedigrees->sMother}}</td>
    <td class="tg-0lax">{{$malepedigrees->smFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$malepedigrees->smMother}}</td>
  </tr>
  <tr>
    <td class="tg-0lax" rowspan="4">{{$malepedigrees->dame}}</td>
    <td class="tg-0lax" rowspan="2">{{$malepedigrees->dFather}}</td>
    <td class="tg-0lax">{{$malepedigrees->dfFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$malepedigrees->dfMother}}</td>
  </tr>
  <tr>
    <td class="tg-0lax" rowspan="2">{{$malepedigrees->dMother}}</td>
    <td class="tg-0lax">{{$malepedigrees->dmFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$malepedigrees->dmMother}}</td>
  </tr>
  <tr>
    <td class="tg-02ax">PARENTS</td>
    <td class="tg-02ax">GRAND PARENTS</td>
    <td class="tg-02ax">GREAT GRAND PARENTS</td>
    <td class="tg-02ax">GREAT GREAT GRAND PARENTS</td>
  </tr>

  <tr>
    <td class="tg-0lax" rowspan="8">{{$femalepedigrees->regName}}</td>
    <td class="tg-0lax" rowspan="4">{{$femalepedigrees->sire}}</td>
    <td class="tg-0lax" rowspan="2">{{$femalepedigrees->sFather}}</td>
    <td class="tg-0lax">{{$femalepedigrees->sfFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$femalepedigrees->sfMother}}</td>
  </tr>
  <tr>
    <td class="tg-0lax" rowspan="2">{{$femalepedigrees->sMother}}</td>
    <td class="tg-0lax">{{$femalepedigrees->smFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$femalepedigrees->smMother}}</td>
  </tr>
  <tr>
    <td class="tg-0lax" rowspan="4">{{$femalepedigrees->damn}}</td>
    <td class="tg-0lax" rowspan="2">{{$femalepedigrees->dFather}}</td>
    <td class="tg-0lax">{{$femalepedigrees->dfFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$femalepedigrees->dfMother}}</td>
  </tr>
  <tr>
    <td class="tg-0lax" rowspan="2">{{$femalepedigrees->dMother}}</td>
    <td class="tg-0lax">{{$femalepedigrees->dmFather}}</td>
  </tr>
  <tr>
    <td class="tg-0lax">{{$femalepedigrees->dmMother}}</td>
  </tr>
</tbody>

</table>
<p class="knawl">"This pedigree is certified true and correct to the best of my knowledge"</p>

</div>
