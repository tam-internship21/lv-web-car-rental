<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('ui/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('ui/css/invoice.css')}}">
</head>
<body>
    <div class="container">
        <a href="{{route('home')}}">Home</a>
        <div class="col-md-12">
           <div class="invoice">
              <!-- begin invoice-company -->
              <div class="invoice-company text-inverse f-w-600">
                 <span class="pull-right hidden-print">
                 <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
                 <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                 </span>
                 CarBook
              </div>
              <!-- end invoice-company -->
              <!-- begin invoice-header -->
              <div class="invoice-header">
                 <div class="invoice-from">
                    <small>Pick-up</small>
                    <address class="m-t-5 m-b-5">
                       <strong class="text-inverse">Ho Chi Minh city</strong><br>
                       Pick-up day: 21/6/2021<br>
                       Pick-up time: 8:00am<br>
                    </address>
                    <small>Car Owner</small> <br>
                    <strong class="text-inverse">Nguyen Van A</strong><br>
                     <address class="m-t-5 m-b-5">
                        Phone: (123) 456-7890<br>
                        Fax: (123) 456-7890
                     </address>
                 </div>
                 <div class="invoice-to">
                    <small>Drop-off</small>
                    <address class="m-t-5 m-b-5">
                     <strong class="text-inverse">Ho Chi Minh city</strong><br>
                       Drop-off day: 21/6/2021<br>
                       Drop-off time: 8:00am<br>
                    </address>
                 </div>
                 <div class="invoice-date">
                    <small>Invoice / July period</small>
                    <div class="date text-inverse m-t-5">August 3,2012</div>
                    <div class="invoice-detail">
                       10:32am<br>
                    </div>
                 </div>
              </div>
              <!-- end invoice-header -->
              <!-- begin invoice-content -->
              <div class="invoice-content">
                 <!-- begin table-responsive -->
                 <div class="table-responsive">
                    <table class="table table-invoice">
                       <thead>
                          <tr>
                             <th>TASK DESCRIPTION</th>
                             <th class="text-center" width="10%">PRICE</th>
                             <th class="text-center" width="10%">HOURS</th>
                             <th class="text-right" width="20%">LINE TOTAL</th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td>
                                <span class="text-inverse">Rental price</span>
                             </td>
                             <td class="text-center">$50/day</td>
                             <td class="text-center">48</td>
                             <td class="text-right">$100,00</td>
                          </tr>
                          <tr>
                             <td>
                                <span class="text-inverse">Service charge</span>
                             </td>
                             <td class="text-center">$50.00</td>
                             <td class="text-center"></td>
                             <td class="text-right">$50,000.00</td>
                          </tr>
                          <tr>
                             <td>
                                <span class="text-inverse">Insurance fees</span>
                             </td>
                             <td class="text-center">$50.00</td>
                             <td class="text-center"></td>
                             <td class="text-right">$50.00</td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
                 <!-- end table-responsive -->
                 <!-- begin invoice-price -->
                 <div class="invoice-price">
                    <div class="invoice-price-left">
                       <div class="invoice-price-row">
                          <div class="sub-price">
                             <small>SUBTOTAL</small>
                             <span class="text-inverse">$4,500.00</span>
                          </div>
                          <div class="sub-price">
                             <i class="fa fa-plus text-muted"></i>
                          </div>
                          <div class="sub-price">
                             <small>PAYPAL FEE (5.4%)</small>
                             <span class="text-inverse">$108.00</span>
                          </div>
                       </div>
                    </div>
                    <div class="invoice-price-right">
                       <small>TOTAL</small> <span class="f-w-600">$4508.00</span>
                    </div>
                 </div>
                 <!-- end invoice-price -->
              </div>
              <!-- end invoice-content -->
              <!-- begin invoice-note -->
              <div class="invoice-note">
                 * Make all cheques payable to [Your Company Name]<br>
                 * Payment is due within 30 days<br>
                 * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
              </div>
              <!-- end invoice-note -->
              <!-- begin invoice-footer -->
              <div class="invoice-footer">
                 <p class="text-center m-b-5 f-w-600">
                    THANK YOU FOR YOUR BUSINESS
                 </p>
                 <p class="text-center">
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> matiasgallipoli.com</span>
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> rtiemps@gmail.com</span>
                 </p>
              </div>
              <!-- end invoice-footer -->
           </div>
        </div>
     </div>
</body>
</html>