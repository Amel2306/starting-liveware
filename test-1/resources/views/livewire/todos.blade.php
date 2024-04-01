<div>
    <form> 
        <input type="text" wire:model="new_todo">
        <!--input type="text" wire:model.live="mobile_todo" ÇA VA MODIFIER EN MEME TEMPS QUE ON ÉCRIT-->
        <button type="button" wire:click="ajouter">Ajouter</button>
    </form>
    <ul> 
        @foreach  ($todos as $todo)
        <li>
            {{$todo}}
        </li>
        @endforeach
    </ul>
</div>
