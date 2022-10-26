<template>
  <body>
    <svg viewBox="-50 -50 600 600">
      <path
        class="pizza slice1 part1"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />
      <path
        class="pizza slice2 part2"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />
      <path
        class="pizza slice3 part3"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />
      <path
        class="pizza slice4 part4"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />
      <path
        class="pizza slice5 part5"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />
      <path
        class="pizza slice6 part6"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />
      <path
        class="pizza slice7 part7"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />
      <path
        class="pizza slice8 part8"
        d="M0,250 L250,250 L75,72 Q10,125 0,250 Z"
      />

      <path
        class="cheese cheese1 part1"
        d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <path
        class="cheese cheese2 part2"
        d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <path
        class="cheese cheese3 part3"
        d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <path
        class="cheese cheese4 part4"
       d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <path
        class="cheese cheese5 part5"
        d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <path
        class="cheese cheese6 part6"
        d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <path
        class="cheese cheese7 part7"
        d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <path
        class="cheese cheese8 part8"
        d="M28,248 L249,249 L92,95 Q25,125 28,248 Z"
      />
      <!-- Slice 1-->
      <circle class="pepperoni part1" cx="60" cy="215" r="25" />
      <circle class="pepperoni part1" cx="110" cy="160" r="25" />
      <circle class="pepperoni part1" cx="165" cy="215" r="25" />

      <circle class="pepperoni part2" cx="140" cy="95" r="25" />
      <circle class="pepperoni part2" cx="215" cy="90" r="25" />
      <circle class="pepperoni part2" cx="215" cy="165" r="25" />

      <circle class="pepperoni part3" cx="285" cy="60" r="25" />
      <circle class="pepperoni part3" cx="345" cy="105" r="25" />
      <circle class="pepperoni part3" cx="285" cy="165" r="25" />

      <circle class="pepperoni part4" cx="400" cy="140" r="25" />
      <circle class="pepperoni part4" cx="425" cy="215" r="25" />
      <circle class="pepperoni part4" cx="335" cy="215" r="25" />

      <circle class="pepperoni part5" cx="410" cy="280" r="25" />
      <circle class="pepperoni part5" cx="410" cy="360" r="25" />
      <circle class="pepperoni part5" cx="335" cy="285" r="25" />

      <circle class="pepperoni part6" cx="330" cy="380" r="25" />
      <circle class="pepperoni part6" cx="290" cy="440" r="25" />
      <circle class="pepperoni part6" cx="280" cy="325" r="25" />

      <circle class="pepperoni part7" cx="220" cy="400" r="25" />
      <circle class="pepperoni part7" cx="150" cy="420" r="25" />
      <circle class="pepperoni part7" cx="220" cy="325" r="25" />

      <circle class="pepperoni part8" cx="70" cy="300" r="25" />
      <circle class="pepperoni part8" cx="120" cy="340" r="25" />
      <circle class="pepperoni part8" cx="165" cy="290" r="25" />
    </svg>
  </body>
</template>

<script>
export default {

}
</script>

<style scoped>
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  /* background-color: #758d75; */
}

svg {
  /* border: 1px solid black; */
  height: 505px;
  width: 505px;
}

.pizza {
  fill: #ffb86d;
  /* stroke: rgb(0, 0, 0);
  stroke-width: 3; */
  transform-origin: right bottom;
  transform-box: fill-box;
}

.cheese {
  fill: #fcf764;
  /* stroke-width: 3;
  stroke: black; */
  transform-origin: right bottom;
  transform-box: fill-box;
}

.pepperoni {
  fill: #f15a46;
  /* stroke-width: 5;
  stroke: #601107; */
}

.slice2,
.cheese2 {
  -webkit-transform: rotate(45deg);
  -moz-transform:    rotate(45deg);
  -ms-transform:     rotate(45deg);
  -o-transform:      rotate(45deg);
  transform:         rotate(45deg);
}

.slice3,
.cheese3 {
  -webkit-transform: rotate(90deg);
  -moz-transform:    rotate(90deg);
  -ms-transform:     rotate(90deg);
  -o-transform:      rotate(90deg);
  transform:         rotate(90deg);
}

.slice4,
.cheese4 {
  -webkit-transform: rotate(135deg);
  -moz-transform:    rotate(135deg);
  -ms-transform:     rotate(135deg);
  -o-transform:      rotate(135deg);
  transform:         rotate(135deg);
}

.slice5,
.cheese5 {
  -webkit-transform: rotate(180deg);
  -moz-transform:    rotate(180deg);
  -ms-transform:     rotate(180deg);
  -o-transform:      rotate(180deg);
  transform:         rotate(180deg);
}

.slice6,
.cheese6 {
  -webkit-transform: rotate(225deg);
  -moz-transform:    rotate(225deg);
  -ms-transform:     rotate(225deg);
  -o-transform:      rotate(225deg);
  transform:         rotate(225deg);
}

.slice7,
.cheese7 {
  -webkit-transform: rotate(270deg);
  -moz-transform:    rotate(270deg);
  -ms-transform:     rotate(270deg);
  -o-transform:      rotate(270deg);
  transform:         rotate(270deg);
}

.slice8,
.cheese8 {
  -webkit-transform: rotate(-45deg);
  -moz-transform:    rotate(-45deg);
  -ms-transform:     rotate(-45deg);
  -o-transform:      rotate(-45deg);
  transform:         rotate(-45deg);
}

.part1 {
  animation: loader 4s ease-in-out forwards infinite;
  opacity: 1;
}

.part2 {
  animation: loader 4s ease-in-out forwards .25s infinite;
  opacity: 1;
}

.part3 {
  animation: loader 4s ease-in-out forwards .5s infinite;
  opacity: 1;
}

.part4 {
  animation: loader 4s ease-in-out forwards .75s infinite;
  opacity: 1;
}

.part5 {
  animation: loader 4s ease-in-out forwards 1s infinite;
  opacity: 1;
}

.part6 {
  animation: loader 4s ease-in-out forwards 1.25s infinite;
  opacity: 1;
}

.part7 {
  animation: loader 4s ease-in-out forwards 1.5s infinite;
  opacity: 1;
}

.part8 {
  animation: loader 4s ease-in-out forwards 1.75s infinite;
  opacity: 1;
}

@keyframes loader {
  0% {
    opacity: 1;
  }
  49% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  99% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

</style>