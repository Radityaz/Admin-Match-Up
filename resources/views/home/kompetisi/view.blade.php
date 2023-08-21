@extends('home.layout.main')

<head>
    <link rel="stylesheet" href="/css/kompetisideatil.css">
</head>

@section('content')
    <nav class="navbar navbar-expand-lg p-0 position-fixed bg-white" style="width: 81.7vw; z-index: 100;">
        <div class="container bg-ms-primary ">
        <a href="/kompetisi" class="logo-xsm " style="background-image: url(/css/img/back.svg); background-size: contain;" ></a>
        <span  >Detail Kompetisi</span>
        <button data-bs-toggle="modal" data-bs-target="#report" class="report" style="background-size: contain;" style="height: 28px;" >Blokir</button>
        </div>
    </nav>
    <div class="container-fluid vh-100" style="overflow-y: scroll">
        <div class="row mt-5 h-100 ">
            <div class="col-6">
                <div class="title">
                    <img class="userlogo rounded-circle" src="" >
                    <div class="ms-0 ms-sm-4 mt-3 mt-sm-0 " >
                        <h1 class="fw-bold" >TITLE</h1>
                        <div style="display: flex; align-items: center;" class="title-content">
                            <div class="sportlogo me-2"></div>
                            <span class="me-2">OLAHRAGA</span>
                            <span>|LOKASI</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="description">
                    <h5 class="fw-bold" >Deskripsi Kompetisi</h5>
                    <span class="des" style="font-size: 12px" >DESKRIPSI</span>
                </div>
                <hr>
                <div class="price">
                    <h5  class="fw-bold"  >Prize Pool</h5>
                    <div class="pricewrapper">
                        <div class="price-box">
                            <img src="/css/img/achievement.png" class="trophy mb-lg-0 mb-2">
                            <h5 class="d-inline-block ms-0 ms-lg-3 fw-bold" >Juara 1</h5>
                            <p class="mt-lg-2 mt-0" style="font-size: 12px" >JUARA PERTAMA</p>
                        </div>
                        <div class="price-box">
                            <img src="/css/img/achievement.png" class="trophy mb-lg-0 mb-2">
                            <h5 class="d-inline-block ms-0 ms-lg-3 fw-bold" >Juara 2</h5>
                            <p class="mt-lg-2 mt-0" style="font-size: 12px" >JUARA KEDUA</p>
                        </div>
                        <div class="price-box">
                            <img src="/css/img/achievement.png" class="trophy mb-lg-0 mb-2">
                            <h5 class="d-inline-block ms-0 ms-lg-3 fw-bold" >Juara 1</h5>
                            <p class="mt-lg-2 mt-0" style="font-size: 12px" >JUARA KEDUA</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="maps pb-lg-5 pb-0">
                    <h5  class="fw-bold"  >Lokasi Sparring</h5>
                    <p style="font-size: 12px" class="des" id="detaillokasi" >LOKASI</p>
                    <iframe class="blank" id="MapDisplay" ></iframe>
                </div>
                <div class="d-block d-lg-none extra-description">
                    <h5>Deskripsi Tambahan</h5>
                    <span class="des">DESKRIPSI TAMBAHAN</span>
                </div>
                <div class="box2-phone d-flex d-lg-none">
                    <h5>Member</h5>
                    <div class="mabar-member">
                        <div class="member">
                            <img class="member-logo rounded-circle " src=""  style="object-fit: cover;">
                            <div class="ms-2">
                                <h6 class="m-0" >USERNAMA</h6>
                                <p class="m-0" >Host</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    <div class="access-phone d-flex d-lg-none">
                        <h4>Biaya Pendaftaran</h4>
                        <h1>Rp. HARGA TIKET<span class="text-muted" >/tim</span> </h1>
                        <div class="access-badge d-flex justify-content-center" >
                            <div class="two w-75">0 Tahun</div>
                        </div>
                    </div>
                    <hr class="d-block d-lg-none">
                    <div class="box-content d-block d-lg-none">
                        <table>
                            <tr>
                                <td>
                                    <div class="icon mx-auto"   ></div>
                                </td>
                                <td  style="font-family: opensans-bold;">Tanggal Pertandingan</td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td style="font-size: 13px;">DATE</td>
                            </tr>
                            <td>
                                <div class="icon mx-auto"></div>
                            </td>
                            <td style="font-family: opensans-bold;">Lama Pertandingan</td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td style="font-size: 13px;">LAMA</td>
                        </tr>
                        <td>
                            <div class="icon mx-auto"></div>
                        </td>
                        <td style="font-family: opensans-bold;">Lokasi Kompetisi</td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td style="font-size: 13px;"  >LOKASI</td>
                        </tr>
                            </table>
                            
                    </div>
            </div>
            <div class=" offset-1 col-4">
                <div class="box1 d-none d-lg-flex ">
                    <div class="access w-100 d-flex justify-content-center border-0">
                        <h5>Biaya Pendaftaran</h5>
                        <h1 class="w-100 text-center" >Rp. HARGA<span style="display: inline-block" class="text-muted" > /tim</span> </h1>
                        <div class="two">TiNGKATAN Tahun</div>
                    </div>
                    <div class="box-content ">
                        <table>
                            <tr>
                                <td width="10%" >
                                    <div class="icon mx-auto" style="background: url(/css/img/calender.png); background-size: contain;"></div>
                                </td>
                                <td width="90%" style="font-family: opensans-bold;">Tanggal Pertandingan</td>
                            </tr>
                            <tr>
                                <td width="10%" >
                                    
                                </td>
                                <td width="90%" style="font-size: 13px;">HARGA</td>
                            </tr>
                            <tr>
                                <td  width="10%"  >
                                    <div class="icon mx-auto" style="background: url(/css/img/clock.png); background-size: contain;"></div>
                                </td>
                                <td width="90%" style="font-family: opensans-bold;">Lama Pertandingan</td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    
                                </td>
                                <td width="90%" style="font-size: 13px;">LAMA jam</td>
                            </tr>
                            <tr>
                                <td width="10%">
                                    <div class="icon mx-auto" style="background: url(/css/img/target.png); background-size: contain;"></div>
                                </td>
                                <td width="90%" style="font-family: opensans-bold;">Lokasi Mabar</td>
                            </tr>
                            <tr>
                                <td width="10%"></td>
                                <td width="90%" style="font-size: 13px;" id="locationTarget"  >LOKASI </td>
                            </tr>
                        </table>
                        <button class="ambil" style="visibility: hidden" >Kompetisi Penuh</button>

                    </div>
                    {{-- @if ($DateNow > $kompetisi->tanggal_pertandingan)
                        <button class="ambil" style="background:#8F8F8F;" >Kompetisi Selesai</button>
                    @elseif ($kompetisi->joinedKompetisi->count() == $kompetisi->max_member)
                        <button class="ambil" >Kompetisi Penuh</button>
                    @elseif ($isJoined)
                        <button class="ambil" >Anda Telah Bergabung</button>
                    @else
                    
                    @endif --}}
                </div>
                <div class="box2 d-none d-lg-block">
                    <h5>Member</h5>
                    <div class="mabar-member p-1" >
                        <div class="member">
                            <img style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#UserProfile" class="member-logo rounded-circle " src="" >
                            <div class="ms-2">
                                <h6 class="m-0" data-bs-toggle="modal" style="cursor: pointer" data-bs-target=""> TITLE </h6>
                                <p class="m-0" >Participants</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/mapslist.js"></script>
    <script>
    DetectMap();

    function DetectMap() {
        var Target = document.getElementById("locationTarget");
        var detail = document.getElementById("detaillokasi");
        var mapsview = document.getElementById("MapDisplay");

        for (let index = 0; index < maps.length; index++) {
            if (Target.innerHTML === maps[index].lokasi) {
                detail.innerHTML = maps[index].detaillokasi;
                mapsview.src = maps[index].embed
                break;
            }
        }
    }
    </script>
@endsection