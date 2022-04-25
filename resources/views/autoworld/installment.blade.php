<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoWorld</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style type="text/css">
        #web-slogan{
            padding-top: 1%;
        }
        #content-header{
            padding:0 5%;
        }
        .form-group{
            padding-left: 5px;
            margin-top: 5px;
        }
        .header-right{
            margin-top: 27px;
            padding-left: 15%;
        }
        #nav-brand:hover {
            color: #e0d9b2 !important;
        }
        .product{
            padding: 10px;
        }
        #img-featured{
            width: 100%;
            height: 250px;
            padding: 5px;
        }
        .card a img{
            width: 100%;
            height: 180px;
            padding: 5px;
        }
        /* main{
             background-color: #585d5a;
         }
         .main-bg{
             background-color: #585d5a;
         }*/
        body{
            background-color: #585d5a;
            /*margin-left: 0px !important;*/
        }
        .popular-product{
            padding-bottom: 20px;
        }
        .option{
            padding: 5px;
        }

        .grid{
            width: 1200px;
            max-width: 100%;
            margin: 0 auto;
        }
        .grid_row{
            display: flex;
            flex-wrap: wrap;
            margin-left: -5px;
            margin-right: -5px;
        }
        .grid_column-2-4{
            padding-right: 5px;
            padding-left: 5px;
            width: 25%;

        }
        .grid_column-2-4 ul li a{
            color: white !important;

        }
        .footer{
            color: #ffffff;
        }
        #product-detail{
            padding: 30px 0;
        }
        #product-content{
            padding: 30px;
        }
        #header-option{
            padding-top: 1.7%;
        }
        .slide{
            padding:0px 5px;
            margin-top: 1px;
        }
        #footer-1{
            position: sticky;
            top: 100%;
            padding: 1rem;
            flex-shrink: 0;
        }
        #regis-info{
            padding: 10px 15px;
        }
        h3{
            color: darkorange;
        }
        h2{
            color: darkorange;
        }
        h5{
            color: darkred;
        }
        li b{
            color: darkslategray;
        }
        #instal{
            padding: 25px 0;
        }

    </style>
</head>
<body class="d-flex flex-column min-vh-100">
<div id="header-dt" class="d-none d-md-block">
    <header id="header-1" class="header-1 bg-dark">
        <div class="row" id="content-header">
            <div class="col-2">
                <a class="logo" href="{{route('autoworld.index')}}" rel="home" aria-label="logo">
                    <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>
            <div class=" col-3 info-solo text-white" id="web-slogan">
                <h1>AutoWorld</h1>
                <p>Kingdom of high-rise cars</p>
            </div>
            <div class="col-7" id="header-option">
                <div class="d-flex justify-content-end">
                    <form action="{{ route('autoworld.searchByName') }}" method="get" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="key" class="form-control" placeholder="Search Car...">
                        </div>
                        {{-- /////--}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <span class="bi bi-search"></span>
                            </button>
                        </div>
                        {{-- /////--}}
                        <div class="form-group">
                            <a href="{{ route('autoworld.register') }}" class="btn btn-info" role="button" >
                                Registration <span class="bi bi-pencil-square"></span>
                            </a>
                        </div>
                        {{-- /////--}}
                        <div class="form-group">
                            <a href="{{ route('autoworld.aboutus') }}" class="btn btn-primary" role="button" >
                                About Us <span class="bi bi-person-circle"></span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="main-bg container" id="instal">
    <main role="main">
        <div class="card" >
            <div style="padding: 20px 25px">
            <h2 style="text-align: center"><b>SUPPORT PAYMENT</b></h2>
                <div style="text-align: center">
                    <h3><b>
                    <i class="bi bi-currency-dollar"></i>
                    <i class="bi bi-currency-dollar"></i>
                    <i class="bi bi-currency-dollar"></i>
                    </b></h3>
                </div>
                <p style="text-align: center">----------------------------------</p>
            <p><b>Should you buy a car on installment? What should you pay attention to when taking out a car loan? What is the best bank to buy a car on installment?</b></p>
            <p>Many people mistakenly believe that car dealers are the place for customers to buy cars on installments. But in fact, the bank is the place where buyers borrow money to buy cars on installments. When buying a car on installment basis, the car dealer will introduce the buyer to the banks that have a loan policy (these banks often have cooperation with the car seller) or the buyer chooses the bank to buy the car. get a loan.</p>
            <p>Buying a car on installment is a form of borrowing money from a bank (or a finance-credit company) to buy a car. The buyer will make installment payments for this loan periodically at a specific interest rate set by the lender. There are two types of auto loans: mortgage loans and unsecured loans. Among them, mortgage loans are more popular because of the lower interest rates.</p>
                &nbsp;
                <h5><b>BANK CAR LOAN INTEREST (April 2022) <i class="bi bi-bank"></i></b></h5>
                <p>Car loan interest rates of banks:</p>
            </div>
            <table class="table-striped table-bordered" style="text-align: center">
                <thead>
                <tr>
                    <th rowspan="2">Bank</th>
                    <th colspan="4">Preferential interest rates for the first months (%/year)</th>
                    <th rowspan="2">Maximum limit (% of car value)</th>
                    <th rowspan="2">Maximum term</th>
                </tr>
                <tr>
                    <th>6 Months</th>
                    <th>12 Months</th>
                    <th>24 Months</th>
                    <th>36 Months</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Techcombank</td>
                    <td>8,29</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>80%</td>
                    <td>7 years</td>
                </tr>
                <tr>
                    <td>VPBank</td>
                    <td>8,49</td>
                    <td>9,49</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>100%</td>
                    <td>7 years</td>
                </tr>
                <tr>
                    <td>Vietcombank</td>
                    <td>&nbsp;</td>
                    <td>8,4</td>
                    <td>9,1</td>
                    <td>9,5</td>
                    <td>100%</td>
                    <td>5 years</td>
                </tr>
                <tr>
                    <td>BIDV</td>
                    <td></td>
                    <td>7,8</td>
                    <td>8,8</td>
                    <td></td>
                    <td>100%</td>
                    <td>7 years</td>
                </tr>
                <tr>
                    <td>Vietinbank</td>
                    <td></td>
                    <td>7,7</td>
                    <td></td>
                    <td></td>
                    <td>80%</td>
                    <td>5 years</td>
                </tr>
                <tr>
                    <td>VIB</td>
                    <td>8,3</td>
                    <td>9,6</td>
                    <td></td>
                    <td></td>
                    <td>80%</td>
                    <td>8 years</td>
                </tr>
                <tr>
                    <td>Shinhan Bank</td>
                    <td></td>
                    <td>7,69</td>
                    <td>8,49</td>
                    <td>9,69</td>
                    <td>100%</td>
                    <td>5 years</td>
                </tr>
                <tr>
                    <td>OCB</td>
                    <td>7,99</td>
                    <td>9,49</td>
                    <td></td>
                    <td></td>
                    <td>80%</td>
                    <td>10 years</td>
                </tr>
                <tr>
                    <td>MSB</td>
                    <td>6,99</td>
                    <td>7,99</td>
                    <td></td>
                    <td></td>
                    <td>95%</td>
                    <td>25 years</td>
                </tr>
                </tbody>
            </table>
            &nbsp;
            <div style="padding: 20px 25px">
                <h5><b>MORTGAGE LOAN <i class="bi bi-wallet"></i></b></h5>
                <p>Mortgage loan is a form of loan with collateral to secure the loan. When taking out a mortgage to buy a car, the buyer must have collateral.</p>
                <p><b>Conditions for car loan installment</b></p>
                <p>To buy a car on installments, buyers need to meet the following car loan conditions:</p>
                <ul>
                <li>Vietnamese citizens from 18 to 60 years old</li>
                <li>Permanent address or KT3 in the locality to apply for a loan</li>
                <li>Have collateral</li>
                <li>Proof of stable income, enough monthly installment payment</li>
                <li>Legitimate car loan purpose</li>
                <li>No bad debt</li>
                </ul>
                <p><b>Collateral when applying for a car loan</b></p>
                <p>When buying a car in installments in the form of a mortgage loan, there are two main types of collateral: the purchased car itself, or other assets that the car owner owns such as real estate, savings books, etc. Buying a car on installment can choose one of these two types as collateral for the installment loan.</p>
                <p><b>Mortgage by car</b></p>
                <p>This is a form of car loan with installment payments where the collateral is the purchased car.</p>
                <li><b>Simple procedures, fast</b></li>
                <p>Most car buyers on installment payments often choose the first type - the collateral is the car they intend to buy. By choosing this type, the installment loan procedure will be simpler and faster. On the other hand, it also does not require the buyer to have any additional large-value assets as collateral.</p>
                <li><b>Do not keep the original Automobile Registration Certificate</b></li>
                <p>However, if the car is mortgaged, the car owner will not be able to keep the original Automobile Registration Certificate. Instead, the bank or finance company will keep because the car has become the collateral for the car owner's loan. The original car registration certificate will be returned to the car owner after the car owner completes the payment of both principal and interest.</p>
                <p>During this process, according to Clause 1, Official Letter 8601/VPCP-CN from the Government Office, car buyers who pay car mortgage installments at a bank or financial company will be able to use a certified copy of the Registration Certificate. car with the original copy of the credit institution's receipt (still valid). The above two papers will act in place of the original Automobile Registration Certificate, especially in cases where it is necessary to present to the competent forces. If these two papers are lost, the car owner can go to the bank to ask for a re-issue.</p>
                <li><b>Do not loan 100% of the car's value</b></li>
                <p>When loaning from a bank to buy a car, but the collateral is that car, you will not be able to borrow 100% of the car's value. Normally, if you have a car mortgage, banks will lend you a maximum limit of 70% - 80% of the car's value. This means the buyer has to pay the remaining amount when buying the car.</p>
                <p>For example, if a bank lends 70% of the car's value, the buyer must initially pay 30% in advance to receive the car, and then pay 70% of the borrowed car value in installments with the prescribed interest rate.</p>
                <li><b>Mortgage with other property</b></li>
                <p>This is a form of car loan with installment payments where the collateral is another asset (not the car purchased) that the buyer is the owner and that property must usually have a value greater than the value of the car. buying. Other collateral commonly accepted by banks are: savings book, red book, Other car documents (new or old within 5 years)…</p>
                <li><b>Must have other assets as collateral that have a higher value than the loan</b></li>
                <p>When you buy a car with a mortgage with another asset (other than the car you buy), that asset usually has to be worth more than the loan you took out to buy the car. Collateral can be real estate, passbook or another car… most commonly real estate or passbook.</p>
                <p>This is quite inconvenient. Because if you can mortgage with a car, why should you choose a mortgage with another property? So it is very rare that people use other assets as collateral, such as mortgages to buy cars. Comparing a car mortgage with another property, it is clear that a car mortgage is much simpler and more affordable.</p>
                <li><b>Get a loan of 100% of the car value, no prepayment</b></li>
                <p>Despite many inconveniences, some people still choose to mortgage with other assets when buying a car on installments because they will be able to borrow 100% of the car's value. Some banks, finance and credit companies currently have loan packages with a limit of up to 100% of the car value, with the condition that they have to mortgage with another property with a value greater than the value of the car. If you choose this package, you will not have to pay upfront. This is the form of buying a car with no prepayment, or buying a car with 0 dong installment.</p>
                <p>Besides borrowing 100% of the car's value, buyers can also choose lower loan rates such as car mortgage loans.</p>
                <li><b>Keep the original Automobile Registration Certificate</b></li>
                <p>When you mortgage with another property, the car you buy is not collateral, so it is clearly yours. Buyer will keep the original Automobile Registration Certificate.</p>
                <p><b>Combine and choose both forms of mortgage</b></p>
                <p>There are also cases where banks support a combination of two types of mortgage, which is a mortgage with a car and with other assets. In this case, it is usually a case of wanting to borrow 100% of the car value (buying a car with no prepayment) but it can't be as low as other assets with a value greater than the value of the car, instead the buyer will mortgage the car to buy. together with a small value asset such as a savings book… to raise the total value of the collateral to be higher than the loan value.</p>
                <p>As long as the total value of the collateral is higher than the value of the car, the bank will approve a loan of 100% of the car value. Usually banks will lend 70% - 80% of the total value of the collateral. Based on this principle, buyers can calculate and choose suitable mortgage properties.</p>
                <p><b>Proof of personal income when applying for a car loan</b></p>
                <p>Besides collateral, proof of income is also a condition of car loans that buyers need to meet. Most banks now require borrowers to demonstrate a stable monthly income. Because the borrower's income will be directly related to the ability to repay the loan.</p>
                <p>The higher the monthly income, the greater the chance of being approved. Normally, car loan borrowers have a stable income of at least 10 - 15 million VND/month, depending on the loan value. Income can be from salary, from property rental or from business/contributing capital...</p>
                <p><b>Installment car loan</b></p>
                <p>Installment car loans are usually charged as a percentage of the vehicle's value or a specific amount, where a percentage of the vehicle's value is more common. Currently, for car loans, the maximum loan limit in banks is usually: 70% - 80% of the car value with new cars; 75% of car value with used car.</p>
                <p><b>Loan percentage based on published price or rolling price?</b></p>
                <p>Many people wonder if the loan-to-value ratio is based on the announced selling price of the car company or the rolling price that includes all taxes, fees, insurance, etc. Each bank will have its own policy. However, normally, the loan percentage will be based on the selling price announced by the car company (listed price) minus promotion (if any). This price does not include taxes, fees, insurance…</p>
                <p>For example, you buy a car:</p>
                <p>List price 559,000,000 VND, promotion 30,000,000, so the actual selling price will be 529,000,000.</p>
                <p>Rolling costs (assuming buying a car in Hanoi) include:</p>
                <ul>
                    <li>Registration fee (temporary 10%): VND 50,000,000</li>
                    <li>Registration fee 340,000 VND</li>
                    <li>Road maintenance fee: 1,560,000 VND</li>
                    <li>Civil liability insurance premium 480,700 VND</li>
                    <li>Material insurance premium 7,935,000 VND</li>
                    <li>License plate fee 20,000,000 VND</li>
                    <li>Total rolling cost: 85,860,700 VND</li>
                </ul>
&nbsp;
                <h5><b>PAYMENT PROCEDURES <i class="bi bi-wallet"></i></b></h5>
                <P>To get a car loan with installment payments, buyers need to follow these steps:</P>
                <p><b>Step 1:</b> Provide all required bank documents & documents</p>
                <p>Personal profile:</p>
                <ul>
                    <li>Identity card/Citizen ID/Passport and household registration book</li>
                    <li>If married, provide Marriage Certificate and Spouse Identity Card</li>
                    <li>If not married or divorced, provide the Certificate of Singleness issued by the ward/commune where you live</li>
                </ul>
                <p>Proof of income:</p>
                <ul>
                    <li>If the income is from salary, it is necessary to provide: Labor contract for at least 1 year, Salary statement of the last 3 months or 6 months via bank. For companies that pay cash, provide a certificate of company payroll.</li>
                    <li>If income from business/business capital contribution, it is necessary to provide: Business Registration Certificate and Company Financial Statement with the company or Individual Business Registration Certificate and Sales Record Book for the last 3 months with household business.</li>
                    <li>If income from real estate rental, need to provide: Lease contract.</li>
                    <li>If you want to mortgage other assets or borrow 100%, you need to provide certification documents such as: red book for real estate, savings book for deposit...</li>
                </ul>
                <p>Dossier for loan purposes:</p>
                <ul>
                    <li>Car sales contract</li>
                    <li>Car dealer deposit receipt</li>
                </ul>
                <p><b>Step 2:</b> The bank conducts the appraisal of the application</p>
                <p>After providing all the necessary documents, the bank will conduct an appraisal of the application. If your application meets all the conditions, it will be reviewed and notified of loan guarantee.</p>
                <p>Buyer submits this guarantee and pays the remaining costs. For example, if the buyer borrows 70% of the car's value, the buyer must pay 30% of the car's value along with rolling costs (taxes, fees, insurance, etc.)</p>
                <p><b>Step 3:</b> Pay registration tax, press number plate, register</p>
                <p>The car dealer will issue an invoice and send a dossier to the buyer to complete the registration tax payment procedures, press the number plate, register...</p>
                <p><b>Step 4:</b> Complete the procedure from the bank</p>
                <p>The buyer goes to the bank to sign a credit contract, notarize relevant documents… When completed, the bank will keep the original Vehicle Registration Certificate and issue the buyer a copy of the Vehicle Registration Certificate along with the receipt. bank receipt. At the same time, the bank will transfer the money to the car dealer.</p>
                <p><b>Step 5:</b> Get the car</p>
                <p>When the car dealership receives the money from the bank, the buyer comes to pick up the car, completing the transaction.</p>

                &nbsp;
                <H5><b>CREDIT LOAN TO BUY CAR <i class="bi bi-wallet"></i></b></H5>
                <P>An unsecured loan is a form of loan that does not require collateral to secure a loan, this type of loan is completely based on the borrower's reputation.</P>
                <p>Pros of unsecured loans:</p>
                <ul>
                    <li>No collateral is required to secure the loan. So if buying a car, the borrower does not need to mortgage the purchased car or other assets.</li>
                    <li>Procedures and documents are simpler than mortgage loan procedures.</li>
                </ul>
                <p>Cons of unsecured loans:</p>
                <ul>
                    <li>High interest rate. When the borrower does not mortgage the property, the lender bears a higher risk. Therefore, to limit risks, unsecured loan interest rates are often higher than mortgage loans.</li>
                    <li>Loans are limited, usually based on the borrower's actual income. For example, in a Techcombak unsecured loan package, the maximum loan amount is 10 months of the borrower's income and does not exceed 300 million VND.</li>
                </ul>
                <p>High mortgage loan conditions must also: prove income; no bad debt.</p>
                <p>The way to calculate the interest rate on an unsecured car loan is similar to that of a mortgage, including two types: principal balance and diminishing balance.</p>
                <p>Currently, most banks or financial - credit companies have consumer unsecured loan packages.</p>
                <p>Comparing mortgage loans and mortgage loans, if you buy a car on installments, a mortgage loan is more suitable when you get a large loan with a lower interest rate. While if you have an unsecured car loan, the interest rate is high and the loan is limited by income, if the borrower has a low income, it is difficult to get a high loan.</p>
            </div>
        </div>
    </main>
</div>


<footer class="footer bg-dark" id="footer-1">
    <div class="grid">
        <div class="grid_row">
            <div class="grid_column-2-4">
                <h7 class="footer_heading"><b>Customer care</b></h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item-link">Contact</a>
                    </li>
                    <li class="footer-item">
                        <a href="{{route('autoworld.policy')}}" class="footer-item-link">Regulations - Policies</a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">Loans support</a>
                    </li>
                </ul>
            </div>
            <div class="grid_column-2-4">
                <h7 class="footer_heading"><b>About Us</b></h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-facebook"></i>
                            facebook
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-instagram"></i>
                            instagram
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-twitter"></i>
                            twitter
                        </a>
                    </li>
                </ul>
            </div>
            <div class="grid_column-2-4">
                <h7 class="footer_heading"><b>Support call center</b></h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-headphones"></i>
                            0912345678
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-headphones"></i>
                            0987654321
                        </a>
                    </li>
                    <li class="footer-item">
                        <a href="" class="footer-item-link">
                            <i class="bi bi-telephone"></i>
                            +8412344566
                        </a>
                    </li>
                </ul>
            </div>
            <div class="grid_column-2-4">
                <h7 class="footer_heading"><b>Operating time</b></h7>
                <ul class="footer-list">
                    <li class="footer-item">
                        <a class="footer-item-link">
                            <i class="bi bi-calendar"></i>
                            Opening: from Monday to Friday
                        </a>
                    </li>
                    <li class="footer-item">
                        <a class="footer-item-link">
                            Address: số 3 Phạm Văn Bạch - Cầu Giấy - Hà Nội
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
