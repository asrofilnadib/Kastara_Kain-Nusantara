@extends('layouts.apps')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

  <!-- Title page -->
  <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
      About
    </h2>
  </section>

  <!-- Content page -->
  <section class="bg0 p-t-75 p-b-120">
    <div class="container">
      <div class="row p-b-68">
        <div class="col-md-7 col-lg-8">
          <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
            <h3 class="mtext-111 cl2 p-b-16">
              Tentang Kastara - Kain Nusantara
            </h3>

            <p class="stext-113 cl6 p-b-26">
            Kastara, sebuah platform E-Commerce eksklusif, hadir untuk memperkenalkan dan menghadirkan 
            keindahan Kain Motif dari berbagai daerah yang tersebar di seluruh Nusantara. Merayakan keberagaman kain 
            tradisional Indonesia, Kastara memberikan pengalaman belanja yang unik dan menarik bagi para penggemar 
            tekstil dan seni dari seluruh penjuru tanah air.
            </p>

            <p class="stext-113 cl6 p-b-26">
            Melalui Kastara, kami mengundang Anda untuk menjelajahi koleksi kain motif yang dipilih secara cermat, 
            mencakup kekayaan budaya dari pulau-pulau dan daerah-daerah yang mempesona. Setiap kain yang kami 
            tawarkan adalah karya seni yang menceritakan cerita khas setiap komunitas lokal, mengekspresikan 
            warisan budaya, dan memperkuat identitas Indonesia yang beragam.
            </p>

            <p class="stext-113 cl6 p-b-26">
            Dengan tujuan mendukung industri kreatif lokal, Kastara menjembatani antara produsen kain tradisional, 
            pengrajin, dan pecinta seni tekstil. Melalui transaksi di Kastara, Anda tidak hanya mendapatkan produk 
            berkualitas tinggi, tetapi juga turut berkontribusi pada pelestarian kearifan lokal dan peningkatan kesejahteraan komunitas.
            </p>
          </div>
        </div>

        <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
          <div class="how-bor1 ">
            <div class="hov-img0">
              <img src="images/about-01.jpg" alt="IMG">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
          <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">

            <p class="stext-113 cl6 p-b-26">
            Setiap kain di Kastara tidak hanya sekadar produk, tetapi juga potongan keindahan yang dapat memperkaya gaya hidup Anda. 
            Selain itu, kami menghadirkan informasi mendalam mengenai asal-usul dan makna dari setiap motif, sehingga setiap pembelian 
            bukan hanya menjadi investasi fashion, tetapi juga perjalanan budaya yang tak terlupakan.
            </p>

            <p class="stext-113 cl6 p-b-26">
            Mari bergabung dalam perjalanan kami untuk merayakan keindahan kain motif Nusantara di Kastara. 
            Temukan dan pamerkan kekhasan budaya Indonesia melalui kain-kain eksklusif yang akan menjadi bagian 
            berharga dari perjalanan fashion dan keindahan tradisional Anda. Selamat berbelanja di Kastara, 
            di mana cerita budaya dan keunikan bertemu dalam satu platform!
            </p>

            <div class="bor16 p-l-29 p-b-9 m-t-22">
              <p class="stext-114 cl6 p-r-40 p-b-11">
              Memikat Hati, Membawa Nusantara ke Gaya Anda!
              </p>

              <span class="stext-111 cl8">
								- Kastara Team
							</span>
            </div>
          </div>
        </div>

        <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
          <div class="how-bor2">
            <div class="hov-img0">
              <img src="images/about-02.jpg" alt="IMG">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
