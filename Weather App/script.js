const apikey = "5572eebbf057047e87c0305a63647f86";
const apiUrl =
  "https://api.openweathermap.org/data/2.5/weather?units=Metric&q=";
const SearchBox = document.querySelector(".search input");
const SearchBtn = document.querySelector(".search button");
const weatherIcon = document.querySelector(".weather-icon");

async function checkWeather(city) {
  const response = await fetch(apiUrl + city + `&appid=${apikey}`);
  const data = await response.json();
  console.log(data);

  document.querySelector(".city").innerHTML = data.name;
  document.querySelector(".temp").innerHTML = Math.round(data.main.temp) + "°c";
  document.querySelector(".humidity").innerHTML = data.main.humidity + "%";
  document.querySelector(".wind").innerHTML = data.wind.speed + "km/h";
  if (data.weather[0].main.toLowerCase() === "clouds") {
    weatherIcon.src = "./images/clouds.png";
  } else if (data.weather[0].main.toLowerCase() === "clear") {
    weatherIcon.src = "./images/clear.png";
  } else if (data.weather[0].main.toLowerCase() === "rain") {
    weatherIcon.src = "./images/rain.png";
  } else if (data.weather[0].main.toLowerCase() === "drizzle") {
    weatherIcon.src = "./images/drizzle.png";
  } else if (data.weather[0].main.toLowerCase() === "mist") {
    weatherIcon.src = "./images/mist.png";
  }

  document.querySelector(".weather").style.display = "block";
}
SearchBtn.addEventListener("click", () => {
  checkWeather(SearchBox.value);
});
