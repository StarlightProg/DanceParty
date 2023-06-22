<table id="dancers_data" class="table">
    <thead>
      <tr>
        <th scope="col">Имя</th>
        <th scope="col">Тело</th>
        <th scope="col">Руки</th>
        <th scope="col">Ноги</th>
        <th scope="col">Голова</th>
        <th scope="col">Действие</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dancers as $dancer)
            <tr>
            <td>{{$dancer->getName()}}</td>
            @php
                $dancerSkill = $dancer->getSkills();
            @endphp
            <td>{{implode(", " ,$dancerSkill['body'])}}</td>
            <td>{{implode(", " ,$dancerSkill['arms'])}}</td>
            <td>{{implode(", " ,$dancerSkill['legs'])}}</td>
            <td>{{implode(", " ,$dancerSkill['head'])}}</td>
            @if ($dancer->getStatus())
                <td style="color:green">Танцует</td>
            @else
                <td style="color:red">Пьёт водку</td>
            @endif
            
            </tr>
        @endforeach
    </tbody>
    </table>
</div>