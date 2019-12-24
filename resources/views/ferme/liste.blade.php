@extends('layouts.header')

@section('content')
    <h1>Index</h1>

    @forelse ($fermes as $ferme)
        <form action="{{ route('updateFerme', $ferme->id) }}" method="post">
            @csrf
            <table>
                <tr>
                    <td>
                        <a href="#!" class="close-input" id="closeInput{{ $ferme->id }}" data-value="{{ $ferme->id }}" data-name="{{ $ferme->nom }}">
                            Fermer
                        </a>
                    </td>
                    <td>
                        <input type="text" class="update-input" required id="updateInput{{ $ferme->id }}" name="nom" value="{{ $ferme->nom }}" readonly>
                    </td>
                    <td>
                        <button type="submit" class="update-btn" id="updateBtn{{ $ferme->id }}">
                            Mettre à jour
                        </button>
                        <a href="#!" class="edit-ferme-btn" id="editFermeBtn{{ $ferme->id }}" data-value="{{ $ferme->id }}">
                            Modifier
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('destroyFerme', $ferme->id) }}" onclick="return confirm('Êtes-vous sur(e) de vouloir supprimer la ferme {{ $ferme->nom }} ? Touts les éléments de cette ferme seront supprimés.')">
                            Supprimer
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('champsFerme', $ferme->id) }}">
                            Plus
                        </a>
                    </td>
                </tr>
            </table>
        </form>
    @empty
        
    @endforelse<br />

    @if ($message = Session::get('error'))
        {{ $message }}
    @endif

    @if ($message = Session::get('success'))
        {{ $message }}
    @endif

    <form action="{{ route('storeFerme') }}" method="post">
        @csrf
        <h3>Ajouter une ferme</h3>
        <label for="nom">Nom de la ferme</label>
        <input type="text" id="nom" required name="nom" placeholder="Saisir dans le champs ...">
        <button type="submit">
            Ajouter
        </button>
    </form>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.edit-ferme-btn').each(function() {
                $(this).click(function() {
                    $('#updateInput' + $(this).attr('data-value')).removeAttr('readonly');
                    $('#updateInput' + $(this).attr('data-value')).addClass('form-control');
                    $('#closeInput' + $(this).attr('data-value')).fadeIn();
                    $(this).fadeOut(function() {
                        $('#updateBtn' + $(this).attr('data-value')).fadeIn();
                    });
                });
            });
            $('.close-input').each(function() {
                $(this).click(function() {
                    $('#updateInput' + $(this).attr('data-value')).attr('readonly', 'readonly');
                    $('#updateInput' + $(this).attr('data-value')).removeClass('form-control');
                    $('#updateInput' + $(this).attr('data-value')).val($(this).attr('data-name'));
                    $(this).fadeOut(function() {
                        $('#updateBtn' + $(this).attr('data-value')).fadeOut();
                        $('#editFermeBtn' + $(this).attr('data-value')).fadeIn();
                    });
                });
            });
        });
    </script>
@endsection