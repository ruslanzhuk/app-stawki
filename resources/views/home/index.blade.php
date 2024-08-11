@extends("parts.app")

@section("content")
    <h1>Stawki na sport !!! Prognozy</h1>

    <form action="{{ route("home.calculate") }}" method="post" id="choice_team">
        @csrf

        <select name="team" id="select_team">
            <option value="Manchester City">Manchester City</option>
            <option value="Chelsea">Chelsea</option>
            <option value="Bradford City">Bradford City</option>
        </select>
        <label for="number">Enter amount of money u want to start</label>
        <input type="number" name="money" />
        <button type="submit" value="submit">Calculate needed amount of money</button>
    </form>
    @if(isset($result))
        <p>You need at least {{ ($result < 0 ? 0 - $result : 0) + $_POST["money"] }} to take part in this season</p>
    @endif
    @if(isset($matches))
        <?php dump($matches) ?>
        <?php dump($test_arr) ?>
        <?php dump($team) ?>
        <?php dump($money) ?>

    @endif
@endsection

