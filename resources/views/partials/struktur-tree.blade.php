<ul>
    @foreach ($struktur as $node)
        <li>
            <div class="node-box">
                <i class="fas fa-user"></i>
                <strong>{{ $node->jabatan }}</strong>
                <span class="nama">{{ $node->nama }}</span>
            </div>

            @if ($node->children->count())
                @include('partials.struktur-tree', ['struktur' => $node->children])
            @endif
        </li>
    @endforeach
</ul>
