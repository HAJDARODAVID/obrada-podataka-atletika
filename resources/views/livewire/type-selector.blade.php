<div class="block w-full overflow-x-auto">
    <table class="items-center bg-transparent w-full border-collapse ">
      <thead>
        <tr>
          @foreach($typeData as $typeName)
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
              {{$typeName->type}}
            </th>          
          @endforeach
  
        </tr>
      </thead>

      <tbody>
        <tr>
          @foreach($typeData as $typeStatus)
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
              <input type="checkbox" wire:model.live='typeValues.{{$typeStatus->type}}'  @if($typeStatus->active) {{ 'checked' }} @endif>
            </td>
          @endforeach
        </tr>
      </tbody>

    </table>
  </div>
