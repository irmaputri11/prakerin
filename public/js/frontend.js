$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    var alamat_artikel = 'api/artikel'
    var alamat_kategori = 'api/kategori'
    var alamat_tag = "/api/tag";

    $.ajax({
        url: alamat_artikel,
        method: "GET",
        dataType: "json",
        
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                
                $("#isinya").append(
                    `
                    <div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="../assets/img/artikel/${value.foto}" alt="">
										</div>
										<ul class="tags">
											<li><a href="#">${value.kategori.nama_kategori}</a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="/blog/">
											<h4>${value.judul}</h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>${value.user.name}</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>${value.created_at}</a></li>
										</ul>
										
									</div>
								</div>
                    `               
                );
                
            });
        }
    });

    $.ajax({
        url: alamat_kategori,
        method: "GET",
        dataType: "json",
        
        success: function (berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function (key, value) {
                
                $("#kategori").append(
                    `
                    <div class="single-post d-flex flex-row">
												<div class="detail">
													<a href="image-post.html"><h6>${value.nama_kategori  }</h6></a>
												</div>
											</div>
                    `               
                );
                
            });
        }
    });





//tag
$.ajax({
    url: alamat_tag,
    method: "GET",
    dataType: "json",
    success: function(berhasil) {
        console.log(berhasil)
        $.each(berhasil.data, function(key, value) {
            $("#tag").append(
                `
                <div class="details">
                    <a href="image-post.html"><h6>${value.nama_tag  }</h6>
                </div>    
                    `
            );

        });
    }
});

$.ajax({
    url: alamat_artikel,
    method: "GET",
    dataType: "json",
    
    success: function (berhasil) {
        // console.log(berhasil)
        $.each(berhasil.data, function (key, value) {
            
            $("#horor").append(
                `
                <div class="single-latest-post row align-items-center">
                <div class="col-lg-5 post-left">
                <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="../assets/img/artikel/${value.foto}" alt="">
                </div>
                <ul class="tags">
                    <li><a href="#">${value.kategori.nama_kategori}</a></li>
                </ul>
            </div>
            <div class="col-lg-7 post-right">
                <a href="image-post.html">
                    <h4>${value.judul}</h4>
                </a>
                <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-user"></span>${value.user.name}</a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>${value.created_at}</a></li>
                </ul>
            </div>
                `               
            );
            
        });
    }
});
});
