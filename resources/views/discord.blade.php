<div>
    <h2>User</h2>
    <p>{{ $user->username }}</p>
    <p>{{ $user->email }}</p>
    <!-- Add more fields as needed -->

    <h2>Guilds</h2>
    @foreach ($guilds as $guild)
        <div>
            <h3>{{ $guild['name'] }}</h3>
            <img src="https://cdn.discordapp.com/icons/{{ $guild['id'] }}/{{ $guild['icon'] }}.png" alt="{{ $guild['name'] }}">
        </div>
    @endforeach
</div>