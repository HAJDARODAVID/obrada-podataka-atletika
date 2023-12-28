<div class="block w-full overflow-x-auto">
    <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
            <tr>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                </th>
                @foreach($years as $year)
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        {{$year->year}}
                    </th>    
                @endforeach
            </tr>
        </thead>

      <tbody>
        @foreach($discipline as $discKey => $disc)
        <tr>
          <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
            {{$discKey}}
          </th>
          @foreach($disc as $key => $dp)
          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
            <input type="checkbox" name="" id="{{$key}}" wire:model.live='discipline.{{$discKey}}.{{$key}}.value' @if($dp['value']) {{ 'checked' }} @endif>
            {{$dp['value']}}
          </td>
            
          @endforeach
          
        </tr>
          
        @endforeach
        
        
      </tbody>

    </table>
  </div>
