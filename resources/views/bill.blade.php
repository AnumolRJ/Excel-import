<html>


<head>
<style>
div {
  /*border: 3px solid #4CAF50;*/
  /*padding: 5px;*/
}

.img1 {
  float: left;
  width: 20%;
}

.img2 {
  float: right;
  width: 20%;
}
.img3 {
  float: center;
  width: 40%;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


			.twidth{
                width :100%;
            }
            .headWidth1 {
                width :20%;
            }
            .headWidth2 {
                width :60%;
            }
            .headWidth3 {
                width :20%;
            }
            .rupee{
                border: 0.5px solid black;
                padding: 3px;
                border-collapse: collapse;
            }
            .example1 {
    border: 1px solid black;
    padding-right: 10px;
    border-radius: 25px;
}
  .table,  .td {
  border: 1px solid black;
    border-collapse: collapse;
     border-right: 1px solid black;
}
.border-rt {
        border-right: 1px solid;

    padding-left: 2px;
}
.border-top {
        border-top: 1px solid;


}
.border-left {
        border-left: 1px solid;
     border-collapse: collapse;

}
.border-bottom {
        border-bottom: 1px solid;


}
.company{
	    font-weight: bold;
    font-size: 20px;
}
.to-company{
	    font-weight: bold;
    font-size: 15px;
}
.Row {
    display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 10px; /*Optional*/
}
.Column {
    display: table-cell;
    background-color: red; /*Optional*/
}
.r-align{
    text-align: right;
}
.pl5{
    padding-left:8px;
}
.pt5{
    padding-top:5px;
}
@media print {
    .pagebreak { page-break-before: always; } /* page-break-after works, as well */
    @page { margin: 0; }
}
body {

    /*margin-top: 1.2cm;*/
    /*margin-left: 1.2cm;*/
    /*margin-right: 1.2cm;*/
    padding: 20px; /* Reset default body padding */
}

/* Add padding to the body content if needed */
body > center {
    padding: 10px; /* Adjust as per your requirement */
}
</style>
</head>
<body >
<center>

    <!--<div>-->
        <table  class="table twidth">

        		<tr>   <td colspan="3"class="company"><center></center></td></tr>
        		<tr><td colspan="3"><center></center></td></tr>
        		<tr><td colspan="3"><center></center></td></tr>
        		<tr><td colspan="3"><center></center></td></tr>
        		<tr><td style="width:15%"></td><td  class="border-rt"><center><b>Tax Invoice</b></center></td>
            		<td style="width:20%" class="border-bottom border-rt border-left border-top">
            		    Original For Recipient
            		</td>
        		</tr>
        		<tr><td colspan="3"><center></center></td></tr>

        </table>




        <table  width="100%" align="left" style="height:160px;" class="border-left border-rt">
            <tr><td></td><td class="company r-align" style="width:50%;">IMPRESS DESIGNS & PRINTS</td></tr>
            <tr><td class="pl5" rowspan="4"><img src="{{ asset('dist/img/logo.jpeg') }}" width="70px" alt="logo" ></td><td class="r-align" style="font-size: 15px;width:50%;">17/1138(7 & 8) Sreedevi Residency, Mettuppalayam Street, Palakkad -678001</td></tr>
            <tr><td class="r-align" style="width:50%;">Proprietor : ARUNMOHAN K.</td></tr>
            <tr><td class="r-align" style="width:50%;">Phone No:0491 2546941,9496518535, 7559846941</td></tr>
            <tr><td class="r-align" style="width:50%;">Email: idprintspkd@gmail.com</td></tr>
            <tr><td></td><td class="r-align" style="width:50%;">GSTIN: 32BYFPK3530F1ZW, State: 32-Kerala</td></tr>
        </table>
        {{-- <table width="1000%"  class="border-rt" style="height:160px;padding-right:8px;">
            <tr><td></td><td class="company r-align">IMPRESS DESIGNS & PRINTS</td></tr>
            <tr><td></td><td class="r-align" style="font-size: 15px;">17/1138(7 & 8) Sreedevi Residency, Mettuppalayam Street, Palakkad -678001</td></tr>
            <tr><td></td><td class="r-align"></td></tr>
            <tr><td></td><td class="r-align">Proprietor : ARUNMOHAN K.</td></tr>
            <tr><td></td><td class="r-align">Phone No:0491 2546941,9496518535, 7559846941</td></tr>
            <tr><td></td><td class="r-align">Email: idprintspkd@gmail.com</td></tr>
            <tr><td></td><td class="r-align">GSTIN: 32BYFPK3530F1ZW, State: 32-Kerala</td></tr>
        </table> --}}



        <table class="twidth table ">
             <tr> <td style="width:50%" class="border-bottom border-rt pl5">Bill To:2023-24/59</td> <td style="width:50%; text-align:right;" ></td></tr>
        	<tr> <td style="width:50%" class="to-company border-rt pl5">PALAKKAD DISTRICT POLICE DEPARTMENT EMPLOYEESCO OPERATIVE SOCIETY LTD . NO .P .1021</td> <td style="width:50%; text-align:right;" ></td></tr>
        	<tr> <td style="width:50%" class=" border-rt pl5">PALAKKAD - 678014</td> <td style="width:50%; text-align:right;padding-right:8px;" >Place of supply :32-Kerala</td></tr>
        	<tr> <td style="width:50%" class=" border-rt pl5">04912537397</td> <td style="width:50%; text-align:right;padding-right:8px;" >Invoice No :2023-24/59</td></tr>
        	<tr> <td style="width:50%" class=" border-rt pl5">32AAATT9785F1Z5</td> <td style="width:50%; text-align:right;padding-right:8px;" >Date :04-03-2024</td></tr>
        	<tr> <td style="width:50%" class=" border-rt pl5"></td> <td style="width:50%; text-align:right;" ></td></tr>

        </table>

        <table class="twidth table" >
            <tbody>
                <tr>
        			<!--<td class="border-rt border-bottom" style="width:5%"><center> <b>#</b></center></td>-->
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"><center><b>Item Name</b></center></td>
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"><center><b>Description</b></center></td>
        			<td class="border-rt border-bottom" style="width:5%;font-size:11px;"><center><b>HSN/SAC</b></center></td>
        			<td class="border-rt border-bottom" style="width:5%;font-size:11px;"><center><b>Quantity</b></center></td>
        			<td class="border-rt border-bottom" style="width:5%;font-size:11px;"><center><b>Unit</b></center></td>
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"><center><b>Price/Unit</b></center></td>
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"> <center><b>Taxable<br>Price/Unit</b></center></td>
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"><center><b>Taxable Amount</b></center></td>
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"><center><b>CGST</b></center></td>
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"><center><b>SGST</b></center></td>
        			<td class="border-rt border-bottom" style="width:10%;font-size:11px;"><center><b>Amount</b></center></td>
                </tr>


                <tr style="height: 30px;line-height: 10px;">
                	<!--<td class="border-rt" style="width:5%"><center></center></td>-->
                	<td class="border-rt" width="10%" style="font-size:12px"><center>Application Forms</center></td>
                	<td class="border-rt" width="10%" style="font-size:12px;line-height: 17px;font-family: 'Times New Roman', Times, serif;"><center>RTGS APPLICATION</center></center></td>
                	<td class="border-rt" style="width:5%"><center>1234</center></td>
                	<td class="border-rt" style="width:5%"><center>174.98</center></td>
                	<td class="border-rt" style="width:5%"><center>174.98</center></td>
                	<td class="border-rt" style="width:10%"><center>174.98</center></td>
                	<td class="border-rt" style="width:10%"><center>174.98</center></td>
                	<td class="border-rt" style="width:10%"><center>174.98</center></td>
                	<td class="border-rt" style="width:10%"><center>174.98</center></td>
                	<td class="border-rt" style="width:10%"><center>174.98</center></td>
                	<td class="border-rt" style="width:10%"> <center>174.98</center></td>
                </tr>


                @for($i=1; $i<=8; $i++)
                <tr style="height: 30px;line-height: 10px;">
        			<!--<td class="border-rt"></td>-->
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
        			<td class="border-rt"></td>
                </tr>
                @endfor

                <tr style="height: 20px;line-height: 30px;">
            		<!--<td class="border-rt border-top"></td>-->
            		<td class="border-rt border-top"><center><b>Total</b></center></td>
            		<td class="border-rt border-top"></td>
            		<td class="border-rt border-top"></td>
            		<td class="border-rt border-top"><center><b>174.98</b></center></td>
            		<td class="border-rt border-top"></td>
            		<td class="border-rt border-top"><center><b>174.98</b></center></td>
            		<td class="border-rt border-top"><center><b>174.98</b></center></td>
            		<td class="border-rt border-top"><center><b>174.98</b></center></td>
            		<td class="border-rt border-top"><center><b>174.98</b></center></td>
            		<td class="border-rt border-top"><center><b>174.98</b></center></td>
            		<td class="border-rt border-top"><center><b>174.98</b></center></td>
        	    </tr>
            </tbody>
        </table>



    <div class="container">
        <table width="50%" align="left" class="table ">

                    <tbody>
        			<tr style="height: 15px;line-height: 15px;">
        			    <td class="border-left border-top pt5 pl5"><center><b>Tax Type</b></center></td>
                		<td class=" border-top pt5 "><center><b>Taxable Amount</b></center></td>
                		<td class=" border-top pt5"><center><b>Rate</b></center></td>
                		<td class="border-top pt5"><center><b>Tax Amount</b></center></td>
                	</tr>
                	<tr style="height: 15px;line-height: 15px;">
        			    <td class="border-left pl5 pt5" style="padding-left:8px;">SGST</td>
                		<td class=" "><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                		<td class=""><center><b>174.98</b></center></td>
                	</tr>
                	<tr style="height: 15px;line-height: 15px;">
        			    <td class="border-left pl5 pt5" style="padding-left:8px;">CGST</td>
                		<td class=" "><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                		<td class=""><center><b>174.98</b></center></td>
                	</tr>
                	<tr style="height: 15px;line-height: 15px;">
        			    <td class="border-left "><center><b></b></center></td>
                		<td class=" "><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                	</tr>
                	<tr style="height: 15px;line-height: 15px;">
        			    <td class="border-left "><center><b></b></center></td>
                		<td class=" "><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                	</tr>
                	<tr style="height: 15px;line-height: 15px;">
        			    <td class="border-left "><center><b></b></center></td>
                		<td class=" "><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                	</tr>
                	<tr style="height: 25px;line-height: 15px;">
        			    <td class="border-left "><center><b></b></center></td>
                		<td class=" "><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                		<td class=""><center><b></b></center></td>
                	</tr>



                </tbody>
        </table>
        <table width="50%" align="right" class=" table">

                    <tbody>
                        <tr style="height: 15px;line-height: 15px;">
        			    <td class="border-top pl5 pt5"><b>Amounts :</b></td>
                		<td class=" border-top pl5"><center><b></b></center></td>
                		<td class=" border-top pl5"><center><b></b></center></td>
                		<td class="border-top pl5"><center><b> </b></center></td>
                	</tr>
                	<tr style="height: 20px;line-height: 15px;"><td style="width:50% " class="pl5" >Sub Total </td><td class="r-align" style="width:50% ;padding-right:8px;">174.98</td></tr>
        			<tr style="height: 20px;line-height: 15px;"><td style="width:50%" class="pl5">Shipping</td><td class="r-align"  style="width:50%;padding-right:8px;" class=" ">174.98</td></tr>
        				<tr style="height: 20px;line-height: 15px;">
        			    <td class=" border-top pl5"><b>Total</b></td>
                		<td class=" border-top r-align pl5 " style="padding-right:8px;"><b>174.98</b></td>
                		</tr>
                		<tr style="height: 20px;line-height: 22px;">
        			    <td class="pl5">Received</td>
                		<td class="r-align " style="padding-right:8px;">0</td>
                		</tr>
                		<tr style="height: 20px;line-height: 25px;">
        			    <td class="pl5 border-top">Balance</td>
                		<td class=" border-top r-align ">174.98</td>
                		</tr>


                </tbody>
        </table>
    </div>

        <table width="100%" height="106px" align="left" class=" table">

                    <tbody>
        			<tr style="height: 20px;line-height: 25px;"><td  class="border-rt"><center>Invoice Amount In Words : </center></td><td style="width: 50%;" rowspan="4"><center>{!! QrCode::size(90)->generate($upiPaymentURL) !!}</center></td></tr>
        			<tr style="height: 20px;line-height: 15px;"><td class="border-rt"><center><b>174.98 Rupees  Only </b></center></td></tr>
        			<tr style="height: 20px;line-height: 15px;"><td class="border-rt"><center>Payment Mode :</center></td></tr>
        			<tr style="height: 20px;line-height: 15px;"><td class="border-rt"><center>Cash</center></td></tr>
                 </tbody>
        </table>
        {{-- <table width="50%"  height="106px"  align="right" class=" table">

                    <tbody>
        			<tr ><td ></td></tr>
        			<tr ><td ></td></tr>
        			<tr ><td ><center></center></td></tr>
        			<tr ><td ></td></tr>
                    <tr><td ></td></tr>
                    <tr><td ></td></tr>
                 </tbody>
        </table> --}}

        <table width="100%" align="left" class="table">

                    <tbody>
        			<tr style="height: 15px;line-height: 15px;"><td class="border-top pl5 border-rt" style="padding-left:8px;width:50%;"><b>Terms and conditions:</b></td><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td class="pl5 border-rt" style="padding-left:8px;width:50%;">Thanks for doing business with us!</td><td   class=""><b><center>For, IMPRESS DESIGNS & PRINTS </center></b></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td  class="pl5 border-rt" style="padding-left:8px;width:50%;"><b>Bank Details: </b></td><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td  class="pl5 border-rt" style="padding-left:8px;width:50%;">Bank Name: Terms and conditions</td><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td  class="pl5 border-rt" style="padding-left:8px;width:50%;">Bank Account No.: Terms and conditions</td><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td  class="pl5 border-rt" style="padding-left:8px;width:50%;">Bank IFSC Code: Terms and conditions</td><td></td></tr>
        		    <tr style="height: 15px;line-height: 20px;"><td  class="pl5 border-rt" style="padding-left:8px;width:50%;">Account Holder's Name: Impress Designs & Prints</td><td><center>Authorised Signature</center></td></tr>
                 </tbody>
        </table>
        {{-- <table width="50%" align="right" class="table">

                    <tbody>
        		<tr style="height: 15px;line-height: 15px;"><td class="border-top" ><b><center></center></b></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td   class=""><b><center>For, IMPRESS DESIGNS & PRINTS </center></b></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td></td></tr>
                    <tr style="height: 15px;line-height: 20px;"><td class="" ><center>Authorised Signature</center></td></tr>
        		    <tr style="height: 15px;line-height: 20px;"><td ></td><td class=""></td><td></td><td></td></tr>
                 </tbody>
        </table> --}}
    <!--</div>-->
</center>


<script>
    window.print();
    setTimeout(
  () => {
    //  window.close();
  },
  4 * 1000
);
</script>
</body>
</html>
