    //availability div expand
    var buttonThis = document.getElementById("availability");
    var otherDiv = document.getElementById("availDrop");
    buttonThis.addEventListener("click", function() {
        var spanEl = document.querySelector("#availability span");

        if (spanEl.className === "glyphicon glyphicon-chevron-down") {
            spanEl.className = "glyphicon glyphicon-chevron-up";
            otherDiv.style.display = "flex";
        } else {
            spanEl.className = "glyphicon glyphicon-chevron-down";
            otherDiv.style.display = "none";
        }
    });


    //price div expand
    var priceButton = document.getElementById("price");
    var priceDrop = document.getElementById("priceDrop");
    priceButton.addEventListener("click", function() {
        var spanEl2 = document.querySelector("#price span");

        if (spanEl2.className == "glyphicon glyphicon-chevron-down") {
            spanEl2.className = "glyphicon glyphicon-chevron-up";
            priceDrop.style.display = "flex";
        } else {
            spanEl2.className = "glyphicon glyphicon-chevron-down";
            priceDrop.style.display = "none";
        }
    });



    //click sidebar sub options
    var subOptions = document.querySelectorAll(".shopSideBarDivDrop .availOpt p");
    var checkboxes = document.querySelectorAll(".shopSideBarDivDrop .availOpt span");

    subOptions.forEach(function(subOption, index) {
        subOption.addEventListener("click", function() {
            if (checkboxes[index].classList.contains("glyphicon-unchecked")) {
                checkboxes[index].classList.remove("glyphicon-unchecked");
                checkboxes[index].classList.add("glyphicon-check");
            } else {
                checkboxes[index].classList.remove("glyphicon-check");
                checkboxes[index].classList.add("glyphicon-unchecked");
            }
        });
    });

