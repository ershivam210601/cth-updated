<!--HEADER SECTION-->
<style>
    #from-result {
   max-height: 150px; 
  overflow-y: auto;
    }

  #to-result {
  max-height: 150px; 
  overflow-y: auto; 
}
.airportlist {
  list-style-type: none;
  padding: 5px;
  border: 1px solid #ccc;
  cursor:pointer; 
}

    </style>
<section>
    <div class="v2-hom-search">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="v2-ho-se-ri">
                    <h5><?php echo $subtitle; ?></h5>
                    <h1><?php echo $title; ?></h1>
                    <p><?php echo $subject; ?></p>
                    <div class="ban-shrt-cut-link">
                        <ul>
                            <li>
                                <a href="#" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="images/icon/2.png" alt=""> Tour</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="images/icon/31.png" alt=""> Flight</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="images/icon/30.png" alt=""> Car Rentals</a>
                            </li>
                            <li>
                                <a href="#" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="images/icon/1.png" alt=""> Hotel</a>
                            </li>								
                        </ul>
                    </div>
                </div>						
                </div>
                <div class="col-md-6">
                <div class="">
                    <form class="contact__form v2-search-form book-tab-form" method="post" action="/booknow">
                        @csrf
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Thank you message
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text"  class="validate" name="name"  placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="number"  class="validate" name="phone"  placeholder="Enter your phone" required>
                            </div>
                            <div class="input-field col s6">
                                <input type="email"  class="validate" name="email"  placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                        <input type="text" id="airports" placeholder="Flying From">
                                <div id="from-result"> </div>
                            </div>
                            <div class="input-field col s12">
                                <input type="text" id="airportsTo" placeholder="Flying To">
                                <div id="to-result"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input type="text" class="datepicker" name="arrivaldate" placeholder="Arrival Date">
                            </div>
                            <div class="input-field col s6">
                                <input type="text"  class="datepicker" name="departuredate" placeholder="Departure Date">
                            </div>
                        </div>
                            <div class="row">
                            <div class="input-field col s6">
                                <select class="chosen-select" name="noofadults">
                                    <option value="" disabled selected>No of adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="input-field col s6">
                                <select class="chosen-select" name="noofchildrens">
                                    <option value="" disabled selected>No of childrens</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>											
                                </select>
                            </div>
                        </div>								
                        <!--
                        <div class="row">
                            <div class="input-field col s6">
                                <select class="chosen-select" name="minprice">
                                    <option value="" disabled selected>Min Price</option>
                                    <option value="$200">$200</option>
                                    <option value="$500">$500</option>
                                    <option value="$1000">$1000</option>
                                    <option value="$5000">$5000</option>
                                    <option value="$10,000">$10,000</option>
                                    <option value="$50,000">$50,000</option>
                                </select>
                            </div>
                            <div class="input-field col s6">
                                <select class="chosen-select" name="maxprice">
                                    <option value="" disabled selected>Max Price</option>
                                    <option value="$200">$200</option>
                                    <option value="$500">$500</option>
                                    <option value="$1000">$1000</option>
                                    <option value="$5000">$5000</option>
                                    <option value="$10,000">$10,000</option>
                                    <option value="$50,000">$50,000</option>
                                </select>
                            </div>								
                        </div>
                        -->					
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                            </div>
                        </div>
                    </form>
                </div>						
                </div>					
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function ajaxCall(id,divid){
        $(document).ready(function () {
            $(id).keyup(function (e) {
                var query = $(id).val();
                $.ajax({
                    type: 'GET',
                    url: '{{ route('search') }}',
                    data: {
                        'query': query
                    },
                    success: function (data) {
                        var results=data;
                        var resultHtml = '';
                        if (results.length > 0) {
                            resultHtml += '<ul id="listid" class="airportlist">';
                            $.each(results, function (search, result) {
                                resultHtml += '<li>' + result.airport_name + '</li>';
                            });
                            resultHtml += '</ul>';
                        } else {
                            if(query.length>0){
                                resultHtml = 'No results found.';
                            }
                        }
                        // alert(divid);
                        $('#'+divid).html(resultHtml);

                        const optionsList = document.getElementById('listid');
       
                        const selectedOption = document.querySelector(id);
                        
       

                        optionsList.addEventListener("click", (e) => {
                        if (e.target.tagName === "LI") {
                            selectedOption.value = e.target.textContent;
                            $('#listid').hide();
                            const myDiv = document.getElementById("listid");

                            if (myDiv) {
                                myDiv.removeAttribute("id");
                            }
                        }
                        });
                    }
                   
                });
            });
        });
    }

    ajaxCall('#airports','from-result');
    ajaxCall('#airportsTo','to-result');

        
        
    </script>

<!--END HEADER SECTION-->
