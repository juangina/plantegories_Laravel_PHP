Route::get('/', function () {
    return view('welcome');
});


public function render()
    {
        return function (array $data) {
             $data['componentName'];
            // $data['attributes'];
            // $data['slot'];
    
            return 'components.welcome';
        };
    }



