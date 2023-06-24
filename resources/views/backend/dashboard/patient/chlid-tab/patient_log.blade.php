
<div class="card-body">

    @foreach ($patient_details->log as $key => $log_data)
        <div class="accordion accordion-flush" id="log_{{ $key }}">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-log-{{ $key }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-{{ $key }}" aria-expanded="true" aria-controls="flush-{{ $key }}">
                        @php echo $log_data->log_title; @endphp
                    </button>
                </h2>
                <div id="flush-{{ $key }}" class="accordion-collapse collapse show" aria-labelledby="flush-log-{{ $key }}"
                    data-bs-parent="#log_{{ $key }}" style="">

                    <div class="accordion-body">
                        <span class="float-end">IP Address : {{ $log_data->ip_address }} <br>Date: {{ $log_data->created_at }}</span>
                        {{ $log_data->description }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach



</div>

