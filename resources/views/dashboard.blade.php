<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
    @use postcss-preset-env;

body {
  background: #ccc;
  display: grid;
  font: 87.5%/1.5em 'Lato', sans-serif;
  margin: 0;
  min-height: 100vh;
  place-items: center;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td {
  padding: 0;
}

.calendar-container {
  position: relative;
  width: 450px;
}

.calendar-container header {
  border-radius: 1em 1em 0 0;
  background: #94C7CB;
  color: #fff;
  padding: 3em 2em;
}

.day {
  font-size: 8em;
  font-weight: 900;
  line-height: 1em;
}

.month {
  font-size: 4em;
  line-height: 1em;
  text-transform: lowercase;
}

.calendar {
  background: #fff;
  border-radius: 0 0 1em 1em;
  -webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
  box-shadow: 0 2px 1px rgba(0, 0, 0, .2), 0 3px 1px #fff;
  color: #555;
  display: inline-block;
  padding: 2em;
}

.calendar thead {
  color: #94C7CB;
  font-weight: 700;
  text-transform: uppercase;
}

.calendar td {
  padding: .5em 1em;
  text-align: center;
}

.calendar tbody td:hover {
  background: #cacaca;
  color: #fff;
}

.current-day {
  color: #94C7CB;
}

.prev-month,
.next-month {
  color: #cacaca;
}

.ring-left,
.ring-right {
  position: absolute;
  top: 230px;
}

.ring-left { left: 2em; }
.ring-right { right: 2em; }

.ring-left:before,
.ring-left:after,
.ring-right:before,
.ring-right:after {
  background: #fff;
  border-radius: 4px;
  -webkit-box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
  box-shadow: 0 3px 1px rgba(0, 0, 0, .3), 0 -1px 1px rgba(0, 0, 0, .2);
  content: "";
  display: inline-block;
  margin: 8px;
  height: 32px;
  width: 8px;
}

.wrapper{
  display:flex;
  justify-content:space-between;
}
</style>

    <div class="py-12" style="float: left;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    <h2> {{ __("¡Bienvenido de nuevo!") }} </h2>
                    <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Tiene $citasCount citas.
                    </div>
                    <br>
                    <img style="width:100%;" src="https://img.freepik.com/premium-vector/doctors-team-medical-staff-doctor-nurse-group-medics-hospital-communication-illustration-flat-style_213307-21.jpg?w=1380" alt="Foto de bienvenida">
                </div>
            </div>
        </div>
    </div>


<div style="float: right; margin-right: 40px; margin-top: 45px;">
    <div class="container">
    <div class="calendar-container" style="float: right;">

        <header>
        
        <div class="day">24</div>
        <div class="month">Mayo</div>

        </header>

        <table class="calendar">
        
        <thead>

            <tr>

            <td>Mon</td>
            <td>Tue</td>
            <td>Wed</td>
            <td>Thu</td>
            <td>Fri</td>
            <td>Sat</td>
            <td>Sun</td>

            </tr>

        </thead>

        <tbody>

            <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            </tr>

            <tr>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            </tr>

            <tr>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            </tr>

            <tr>
            <td>22</td>
            <td>23</td>
            <td class="current-day">24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            </tr>

            <tr>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td class="next-month">1</td>
            <td class="next-month">2</td>
            <td class="next-month">3</td>
            <td class="next-month">4</td>
            </tr>

        </tbody>

        </table>

        <div class="ring-left"></div>
        <div class="ring-right"></div>

    </div> <!-- end calendar-container -->

    </div> <!-- end container -->
</div>



</x-app-layout>
