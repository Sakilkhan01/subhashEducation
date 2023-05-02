@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<style type="text/css">
    table td{
    	font-family: system-ui;
    }
    table th{
    	text-transform: uppercase;
    }
</style>
<section class="gallery-area2">
    <div class="container px-4">
        <div class="col-lg-9 col-12 mx-auto">
            <div class="row py-5">
                <div class="col-lg-12 col-12 text-center mb-3">
                    <h4>Required Documents</h4>
                </div>
            <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th class="w10">S.No</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="w10">1</td>
                    <td>Aadhar Card (Xerox Copy) ofFather, Mother&Student.<br>(आधार कार्ड की प्रतिलिपि पिता, माता एवं छात्र)</td>
                  </tr>
                  <tr>
                    <td class="w10">2</td>
                    <td>Date of Birth Certificate of the candidate.<br>(छात्र का जन्म प्रमाण पत्र )</td>
                  </tr>
                  <tr>
                    <td class="w10">3</td>
                    <td>Domicile Certificate of the candidate <br>(मूल निवास प्रमाण-पत्र )</td>
                  </tr>
                  <tr>
                    <td class="w10">4</td>
                    <td>Transfer cerfiticate duly counter signed by district education officer <br>(स्थानान्तरण प्रमाण-पत्र )</td>
                  </tr>
                  <tr>
                    <td class="w10">5</td>
                    <td>Student Photo (2 Copies)</td>
                  </tr>
                  <tr>
                    <td class="w10">6</td>
                    <td>Cast Certificate. <br>(जाति प्रमाण-पत्र)</td>
                  </tr>
                  <tr>
                    <td class="w10">7</td>
                    <td>Service certificate of the father if serving.</td>
                  </tr>
                  
                  
                </tbody>
              </table>
        </div>
        </div>
    </div>
</section>
@stop
