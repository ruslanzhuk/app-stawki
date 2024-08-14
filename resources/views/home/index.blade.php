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
        <p>You need at least {{ max($test_arr4) + $_POST["money"] /*($result < 0 ? 0 - $result : 0) + $_POST["money"]*/ }} to take part in this season</p>
        <p>Then You will get {{ max($test_arr) }} $ </p>
        @if($test_arr3[max(array_keys($test_arr3))] < 0) <p>But you lost last bet and now you haven't {{ $test_arr3[max(array_keys($test_arr3))]  }} bucks in your pocket :-) </p> @endif
    @endif
    @if(isset($matches))
<!--        --><?php ////dump($team) ?><!----><!---->
<!--               --><?php //echo "Borg"; dump($test_arr3) ?><!---->
<!--        --><?php //////////dump($money) ?><!----><!----><!----><!----><!---->
<!--        --><?php ////////////dump($matches[0]->getAttributes()) ?><!----><!----><!----><!----><!----><!---->
{{--    <?php dump($matches) ?>--}}

        <table>
            <tr class="fields">
                @foreach($matches[0]->getAttributes() as $field => $value)
                    @if($field != "created_at" && $field != "updated_at")
                        @if($field == "coefficient_team_first")
                            <td>1</td>
                        @elseif($field == "coefficient_team_second")
                            <td>2</td>
                        @elseif($field == "coefficient_draw")
                            <td>X</td>
                        @elseif($field == "team_first_goals")
                            <td>team A goals</td>
                        @elseif($field == "team_second_goals")
                            <td>team B goals</td>
                        @else
                            <td>{{ $field }}</td>
                        @endif
                    @endif
                @endforeach
                <td>Stawka</td>
                <td>Money+</td>
            </tr>
            @foreach($matches as $fmatch)

                <tr>
                    @foreach($fmatch->getAttributes() as $field => $value)
                        @if($field != "created_at" && $field != "updated_at")
                            <td>{{ $value }}</td>
                        @endif
                    @endforeach
                    @if($test_arr2[$fmatch->getAttributes()["match_date"]] == max($test_arr2))
                            <td style="background: red; color: white">{{ $test_arr2[$fmatch->getAttributes()["match_date"]] }}</td>
                    @else
                            <td>{{ $test_arr2[$fmatch->getAttributes()["match_date"]] }}</td>
                    @endif
                    <td>{{ $test_arr[$fmatch->getAttributes()["match_date"]] }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection

