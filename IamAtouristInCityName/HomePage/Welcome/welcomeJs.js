const countryCityInfo = {
  Romania1: ["Timisoara", "Pitesti"],
  Italy1: ["Milano", "Venice"],
  Germany1: ["Munich", "Nuremberg"],
  France1: ["Paris"],
  France2: ["Paris"],
  France3: ["Paris"],
  France4: ["Paris"],
  France5: ["Paris"],
  Romania2: ["Timisoara", "Pitesti"],
  Italy32: ["Milano", "Venice"],
  Germany13: ["Munich", "Nuremberg"],
  Franc23re: ["Paris"],
  France: ["Paris"],
  Frangr4e: ["Paris"],
  Francbgte: ["Paris"],
  Frantce: ["Paris"],
  Romania: ["Timisoara", "Pitesti"],
  Italby: ["Milano", "Venice"],
  Germaeny: ["Munich", "Nuremberg"],
  France: ["Paris"],
  Frtance: ["Paris"],
  Frfnce: ["Paris"],
  Frawnce: ["Paris"],
  Fragnce: ["Paris"],
  Romafnia: ["Timisoara", "Pitesti"],
  Italwey: ["Milano", "Venice"],
  Germawny: ["Munich", "Nuremberg"],
  Frangrce: ["Paris"],
  Franwce: ["Paris"],
  Frbance: ["Paris"],
  Fra3ce: ["Paris"],
  Frante: ["Paris"],
};

window.onload = function () {
  

  const countrySelection = document.querySelector("#Country"),
    citySelection = document.querySelector("#City"),
    explorationForm = document.querySelector("#explorationForm"), 
    exploreButton = document.querySelector("#button");

  citySelection.disabled = true; 

  for (let country in countryCityInfo) {
    countrySelection.options[countrySelection.options.length] = new Option(
      country,
      country
    );
  }

  countrySelection.onchange = (e) => {
    citySelection.disabled = false;

    citySelection.length = 1; 

    let city = countryCityInfo[e.target.value];

    for (let i = 0; i < city.length; i++) {
      citySelection.options[citySelection.options.length] = new Option(
        city[i],
        city[i]
      );
    }
  };
   exploreButton.addEventListener("click", function() {
    explorationForm.submit(); d
  });
};