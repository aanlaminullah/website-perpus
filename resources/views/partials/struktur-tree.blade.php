<ul>
    @foreach ($struktur as $node)
        <li>
            <div class="node-box">
                {{-- <i class="fas fa-user"></i> --}}
                <div class="node-content">
                    <strong class="jabatan">{{ $node->jabatan }}</strong>
                    <span class="nama">{{ $node->nama }}</span>
                </div>
            </div>

            @if ($node->children->count())
                @include('partials.struktur-tree', ['struktur' => $node->children])
            @endif
        </li>
    @endforeach
</ul>
