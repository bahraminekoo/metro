<?php

namespace Metro\Http\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CallApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'call:api {url} {--start-date=} {--end-date=} {--price-from=} {--price-to=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'call url with parameters';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $url = $this->argument('url');
        Log::info('start reading endpoint: ' . $url);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $this->error('url is not correct !');
        } else {
            $startDate = $this->option('start-date');
            $endDate = $this->option('end-date');
            $priceFrom = $this->option('price-from');
            $priceTo = $this->option('price-to');
        }
    }
}
