<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('generateFiledCode')) {
    function generateFiledCode($code)
    {
        $result = $code.'-'.date('s').date('y').date('i').date('m').date('h').date('d').mt_rand(1000000, 9999999);

        return $result;
    }
}

if (!function_exists('generateBreadcrumb')) {
    function generateBreadcrumb($data)
    {
        if (empty($data)) {
            return null;
        }

        $result = '<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="'.url('/').'" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>';

        foreach ($data as $uri => $item) {
            if ($uri == '!end!' || $uri == '#') {
                $result .= '<li class="m-nav__separator">-</li>
                            <a class="m-nav__link">
                                <span class="m-nav__link-text">'.$item.'</span>
                            </a>';

                continue;
            }
            $result .= '<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="'.url($uri).'" class="m-nav__link">
								<span class="m-nav__link-text">'.$item.'</span>
							</a>
						</li>';
        }

        $result .= '</ul>';

        return $result;
    }
}

if (!function_exists('translate_message')) {
    /**
     * translate message return API.
     *
     * @param string $code
     * @param string $lang
     */
    function translate_message($code = '0', $lang = 'indonesian')
    {
        if ($lang == 'indonesian') {
            $message = array(
                '30' => 'Delete data berhasil',
                '0' => 'sukses',
                '1' => 'Parameter error',
                '2' => 'Username atau password salah',
                '3' => 'Pencarian tidak ditemukan',
                '4' => 'Data tidak ditemukan',
                '5' => 'Register error',
                '6' => 'Forgot password error',
                '7' => 'Change password error',
                '8' => 'Update data error',
                '9' => 'Save data error',
                '10' => 'Delete data error',
                '11' => 'Invalid access token',
                '12' => 'Failed to send email',
                '13' => 'Invalid forgot token',
                '14' => 'Invalid Code',
                '15' => 'Failed to upload photo',
                '16' => 'Akun anda belum aktif',
                '17' => 'Akun Anda di-suspend',
                '18' => 'Session Anda telah habis',
                '19' => 'Data ditemukan',
                '20' => 'Data berhasil di buat',
                '21' => 'Data gagal di buat',
                '22' => 'Login berhasil',
                '23' => 'Logout berhasil',
                '24' => 'Logout gagal',
                '25' => 'Update data berhasil',
                '26' => 'exist',
                '27' => 'not exist',
                '28' => 'Update profile berhasil',
                '29' => 'Update profile gagal',

                '31' => 'Valid Token',
                '32' => 'Invalid Token',
            );

            return isset($message[$code]) ? $message[$code] : $code.' - Kode tersebut belum terdefinisi di dalam sistem kami.';
        }
    }
}

/*
 *  Encode base64 image and save to Storage
 */
if (!function_exists('uploadFotoWithFileName')) {
    function uploadFotoWithFileName($base64Data, $file_prefix_name)
    {
        $file_name = generateFiledCode($file_prefix_name).'.png';
        $insert_image = Storage::disk('public')->put($file_name, normalizeAndDecodeBase64Photo($base64Data));

        if ($insert_image) {
            return $file_name;
        }

        return false;
    }

    function normalizeAndDecodeBase64Photo($base64Data)
    {
        $replaceList = array(
            'data:image/jpeg;base64,',
            'data:image/jpg;base64,',
            'data:image/png;base64,',
            '[protected]',
            '[removed]',
        );
        $base64Data = str_replace($replaceList, '', $base64Data);

        return base64_decode($base64Data);
    }
}

if (!function_exists('validationMessage')) {
    function validationMessage($validation)
    {
        $validate = collect($validation)->flatten();

        return $validate->values()->all();
    }
}
