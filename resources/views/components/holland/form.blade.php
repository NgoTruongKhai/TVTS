@extends('index')
@section('content')
    <div class="container p-3 mb-2 bg-white rounded w-75 shadow mt-1">
        <div class="text-danger fs-4 fw-bold text-center">Mật mã Holland - Trắc nghiệm Holland</div>
        {{-- Form --}}
        <form action="" method="POST" id="regForm">
            @csrf
            @isset($nhomnganh)
                @foreach ($nhomnganh as $nhomnganh1)
                    <div class="row mt-3 tab ">
                        <div class="fs-4 fw-bold text-center mb-3">Nhom {{ $nhomnganh1->ma_nhom }}</div>
                        @foreach ($cauhoi as $cauhoi1)
                            <div class="col-md-8 offset-1">
                                <div class="fs-5 fw-bolder mb-2 mt-2 h5 py-2">
                                    {{ $cauhoi1->noi_dung }}
                                </div>
                                @foreach ($cautraloi as $cautraloi1)
                                    @if ($cautraloi1->id_cau_hoi == $cauhoi1->id && $cautraloi1->ma_nhom_nganh == $nhomnganh1->ma_nhom)
                                        <input type="checkbox" name='{{ $nhomnganh1->ma_nhom }}[]' value="1"
                                            class="mb-2 ms-4 fs-6">
                                        {{ $cautraloi1->noi_dung }}
                                        <br>
                                    @endif
                                @endforeach
                                <input type="checkbox" name='{{ $nhomnganh1->ma_nhom }}[]' value="0" hidden checked>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                <div class="text-center mt-4 style='overflow:auto;' ">


                    <button type="button" id="prevBtn" class="btn btn-primary opacity-50" onclick="nextPrev(-1)"
                        hidden>Previous</button>
                    <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1) ">Next</button>


                    {{-- <input type="submit" value="Tư vấn" name='submit' class="btn-primary btn"> --}}
                </div>
                <div class="text-center mt-2">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
            <script>
                var currentTab = 0; // Current tab is set to be the first tab (0)
                showTab(currentTab); // Display the current tab

                function showTab(n) {
                    // This function will display the specified tab of the form...
                    var x = document.getElementsByClassName("tab");
                    x[n].style.display = "block";
                    //... and fix the Previous/Next buttons:
                    if (n == 0) {
                        document.getElementById("prevBtn").style.display = "none";
                    } else {
                        document.getElementById("prevBtn").style.display = "inline";
                    }
                    if (n == (x.length - 1)) {
                        document.getElementById("nextBtn").innerHTML = "Tư Vấn";
                    } else {
                        document.getElementById("nextBtn").innerHTML = "Next";
                    }
                    //... and run a function that will display the correct step indicator:
                    fixStepIndicator(n)
                }

                function nextPrev(n) {
                    // This function will figure out which tab to display
                    var x = document.getElementsByClassName("tab");
                    // Exit the function if any field in the current tab is invalid:
                    if (n == 1 && !validateForm()) return false;
                    // Hide the current tab:
                    x[currentTab].style.display = "none";
                    // Increase or decrease the current tab by 1:
                    currentTab = currentTab + n;
                    // if you have reached the end of the form...
                    if (currentTab >= x.length) {
                        // ... the form gets submitted:
                        document.getElementById("regForm").submit();
                        return false;
                    }
                    // Otherwise, display the correct tab:
                    showTab(currentTab);
                }

                function validateForm() {
                    // This function deals with validation of the form fields
                    var x, y, i, valid = true;
                    x = document.getElementsByClassName("tab");
                    y = x[currentTab].getElementsByTagName("input");
                    // A loop that checks every input field in the current tab:
                    for (i = 0; i < y.length; i++) {
                        // If a field is empty...
                        if (y[i].value == "") {
                            // add an "invalid" class to the field:
                            y[i].className += " invalid";
                            // and set the current valid status to false
                            valid = false;
                        }
                    }
                    // If the valid status is true, mark the step as finished and valid:
                    if (valid) {
                        document.getElementsByClassName("step")[currentTab].className += " finish";
                    }
                    return valid; // return the valid status
                }

                function fixStepIndicator(n) {
                    // This function removes the "active" class of all steps...
                    var i, x = document.getElementsByClassName("step");
                    for (i = 0; i < x.length; i++) {
                        x[i].className = x[i].className.replace(" active", "");
                    }
                    //... and adds the "active" class on the current step:
                    x[n].className += " active";
                }
            </script>
            <style>
                /* Style the form */


                /* Style the input fields */


                /* Mark input boxes that gets an error on validation: */
                input.invalid {
                    background-color: #ffdddd;
                }

                /* Hide all steps by default: */
                .tab {
                    display: none;
                }

                /* Make circles that indicate the steps of the form: */
                .step {
                    height: 10px;
                    width: 10px;
                    margin: 0 2px;
                    background-color: #dfdfdf;
                    border: none;
                    border-radius: 50%;
                    display: inline-block;
                    opacity: 0.7;
                }

                /* Mark the active step: */
                .step.active {
                    opacity: 1;
                }

                /* Mark the steps that are finished and valid: */
                .step.finish {
                    background-color: #000000;
                }
            </style>
        @endisset

        @isset($result)
            <div>
                @include('components.holland.holland')
            </div>
        @endisset
    </div>
    {{-- <style>
        .step {
            display: none;
        }

        .is-active {
            display: block;
        }
    </style> --}}
@endsection
