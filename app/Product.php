<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];
    
    public static function getProducts()
    {
        return [
            ['id' => 1, 'name' => 'Iphone 11 256GB', 'price' => 699, 'img' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8SDw8PDxAPDxANDxAPDw8PDQ8NDw8OFRIWFxURFhMYHSggGB0nGxUVITEiJistLi4uFx8zODUsNyguMisBCgoKDg0OGhAQFSseHSUrLS0rMC0tOCsrLSstLystKy0tKy0rLS0tLS0tLS0tKy0tKy0tLS0tKy0tLS0tLSstN//AABEIAMQBAQMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAAAgcDBgQFCAH/xABOEAABAwIBBgYMDAMGBwAAAAABAAIDBBEhBQYSMUFxBxNRYXKyIiMkMjM0c4GDsbPTFBclU1R0hJGTlKG0QlLBFTVjgqLSRGKSo9Hh8f/EABgBAQADAQAAAAAAAAAAAAAAAAABAgME/8QAIREBAQACAgICAwEAAAAAAAAAAAECMQMRBCETURIyQXH/2gAMAwEAAhEDEQA/ALxREQEREBEXXZZy1BStaZSS6Q6MUUbdOaV3Ixu3WLk2AviQlvRJ27FF0IyxVuxbSxNadXG1bxJuLWxEA+cqRynV7IKfz1Ut/ZKnyY/a/wAeX07xF0f9p1nzFP8AmpfdLost5+yUzxDxEEs5GlxMdVJdrdheeKs0frzJM8bpFws23lFXI4SKi2NDDfDAVsh/UwhTHCLN9Di/Nv8AdK6ncWGir0cIk/0KP83J7pcjI2eldVuIpsnwuYw2fM+tkjiB2gEQHSO4W50O29IuoZWVtsYKYHDAVUpHPjxK+/C635ml/NTe5Udpdsi6SqynVRsdJJHSMZG0ue91XK1rWjWSTFgFp7+FCUuPFUUUkYwErqqaIO52t4gm2+ykWWirYcJk9z3DFsx+GyY/9lS+Mqf6FF+cl9ygsdFXPxkVH0GL83L7hffjHqPoMf5uX3CCxUVdfGPUfQY/zcvuE+Meo+gx/m5fcILFRV18Y9R9Bj/Ny+4Uo+EiW/Z0LdHaWVUjneYGED9QgsNF0ubec9LWtdxLi2SK3GwSAMmjvqJbfEc4JC7pAREQEREBERAREQEREBahGWmWrr5Ti10sMZOIhp4HOaQ3e5rnc+kOQLb1p8sAfRzxnASvq2c4DpXj+qx5tNeHaqsocLFR8K7XFHxDJNFzXgucW3sSTy8wt59atrNzKkNXDxjWNa5pLHtwdouABwO0WIPnXnjLGbNdBNI1sTnCRxxAJBvfUdo/VWxwfMfQ5NMtWSHklzmkEEANAAt0W35darnMJjPx2vjc7le9N0yrUthgmn0RoxMe6wuD2LSdfmVQV05ijklkJdI/tk772dLM4nC+xuBPMMF2+XOEB80NRCKdoZNG+MOMh0xpAgOOFvN+q6POWHTiew4kll7djc6Dr25NZV8MbNxjy5d6rqM3s5GvqAyaCN8cgIae9cCMRYm+y+u6sKOhpyAWxxOa5rXNJjaLtcLi/Jz891TEdLUtIY23YuBDsRiCMba9gVoU2U2Rwxlxc5scbGNAsHPdj91zpHmHKtMpP4ybHlrNeIOpYGWY6slDC6O8ZDA0vktY/wAjHC+wkLsM/s6I8k0kUUEbdIjQhjAsxrW2GkQLXx2YbeRa5mnlwT5SomGLQLXylrhM54FqeXAgjkJ1WXM4ZM25atjHwgufAD2IxNtIm9tu0edR11teOHmBwmOnkMNbDHi9oEjexLQ82BI2gHXyA3xVsVDGNbdrGkkgDDVfavNWaGblfJWwtkifHExwEriDbixa4vs70DFXPnVnq2j0YWsE0xFyC7RaB/Mde2+HMdVsZsn8P9dTwkVhe6GkOEQD6icNJDZBGRxbSDsvpHe0Kr84MtmN4Y0Bz8L371ptfQA1C1xitoylnE6tmfI6NsXFUwYWtcXB1zIQRqttwxWhZwwuNQ97D2TZXkX1HstXMcEk62NvzfqoaiAPMbWSta7SGDmu0O+14g27LkIvq27Rm7kOKpc8EMboNvgwEnX/AOFWWaU0jJJDIbaTC1rRylpYST0T6ltgyw2LBrXPfbsjxro2tv8AwjRxJ5cVNn0mX7dlWQCJzg03a1+gRe4BvYEefC3OjSuMalktO6RgLbOja9jiHFjtNpBDsLggG2Gw+fMCoTGUL6oAqV0H1ERBKjnMNTT1bMHwStZIdWnTPNpWO5cMRzhp2BXUqNrb8VLbA6O0Xw2/pdXkpRRERECIiAiIgIiICIiAtTa8NpnuJsGyVJJOwCZ1ytsWomm42klj1CR9WwnkDpXi/wCqx5tNuHaoctcJ0omc2miZxbDa7wS5y2PJOVBlWglYwFkmpzAf4tEi4vvOHMq1y3m1XU08kfEvcHuJBaLg3vqO0YnUrE4MMgzUkD5JhovmcHBm0NHKq5zCYy432vhc7lZlpqNTknKDA9kkJ0IwXOeHM0dFuJdok6Q3WXZ5yTBjXOOoPb1XKy86XPNHVnseLNLLbXpaWif0sqxzlpTKySMd8S1zRq0iA4Fu8h2G5aY8lzntz8uEwvpqLsu44s7HlBINl3jLyw6LHatF7Cb2wvYG2oHScL7MNi1J8Ew7SRttci23k1rZslu4vi2371oatL1/GdbLwcCf+1qIytDWtdOB2yN+JppdQaThgt94Rc6WUDA/R05JLiNmzBxuT94WqZjvccpUelo242fR0b978GltfnXa8MmbE1VGyWAFz4C7sRcktJvcDbrI86i3u91bHTUsj8Kkzp2sqYmCN7gNKO4c0n1rus/sgVUkjK2lbxoc0BzQQLi9wQTgDcnXa4I5FXOR82K+pqI4zC5gY8Fz3CzWgW1nzBei8lAsj4phBLGAM0tVwLC/6KbZL6Nz2pbJ1JURmc1MZjdJCwtBcxxLRxgv2JIWt5ZqwyaUazxsmH+Y/wDpWtn2H/CAH20zRsDtG+jfTl1Kp84aWQSmdgwLtPmDzbSaeQ3BIvrBTvu+0sdBWhzrW0XAXsNRbtXcS8dp6cVnaeLm6bGOa7bbSIBadeHLZa3k9j+M4x2Fm6IG4AD1LZsmzktsCLtI18invq+jrue3c5PaWU72uIL5Hxvdom7WhrgGtvtPZOJthq512YK6trzg3a4jzNBvf9Aue1yqlyAVIFYQVMFEswKLGCpAoIVvgZeg7qlXi03APKFRtb4GXoO+7RKvJtrC2rZuUor6iIiBERAREQEREBERAWs5GdeBpP8AFJMTvMritmWr5E8WZ05faOWPNptw7cswtOxfeKapL6uZ0ulzvaPgNSMcYXt+8W/qqvrz2blaGeB7iqPJlVZlB3bHbz610cOnJ5H7Rjtzu/6iphg5T96xNcsjXLZg77Mll8p0ty46PHOF3Ei/EvH9VbcrQb3F8VUmYh+U6fozezcrbdrO9RVsUBA3kU2xAakC+3ULKy4QfG/s7ef+KRaXYHmPKDYrcuEI91nyDfW9aWCrCbYxyn7ysjWchcNziFjDlNrkGeMAefWTiT51la5cdrlNrkHJDlka5cZrlkDkHIBUgVgDlMFBKpPa5OieqVeMHeN6I9SouoPa5Oi7k/lPKr1jtoi2qwtushUkRFKBERAREQEREBERAWsZIbaBoP8ADJMDvErgtnWtZO8F6eo9s9Y82m3DtyVIFRRczpdPnj4jUnkhe7zAXVU5RPbXbz61a+d57gq/q8vUKqXKZ7a7efWujh1XJ5H7Rja5TDlgBUw5bMGx5iSWypSjHsuOA38S84/creccTvVN5in5VoulN+2lVxOOJ3qKtimCigCpXULKy4RB3UfINP8AqkWkAreOEfxkfV29eRaGCrQZw5Ta5YAVMOQZ2uWRpXHBU2uQcgOWQOXHa5TDkHJDlNrlxw5TDkGaU9rf0XdVyvaDvG9EepUK89rk6DuqVfgClD6iIgIiICIiAiIgIiIC1rJ/gvT1HtnrZVrNB4L09R7Z6x5tNuHbkoogr6uZ0upzv8Qq/q8vUKqPKp7c/efWVbed57hq/q8vUKqHKx7c/efWujh1XJ5G4wgqYKwAqYK2YNizCPyrR75/28quRxxO8qmcwD8q0e+f9vKrjecTvKrVsUwvt1jBUrqFla8JHjH2dvWkWggrfOEg90fZ29aRV+HK8GcFTDlgBUwUGcFS0tq4dVPoMLhrwA3lcOjrHEkF174i6DvGOUw5cKmeTckrkhyDkBymHLjhymHIOTfsJOg7qlegF58aexf0HdRy9BqUCIiAiIgIiICIiAiIgLWaHwXp6j2z1sy1ii8F6eo9s9Y82m3DtnBX0FQX265nS6rO/wARqvq8vUKqDLB7c/efWrdzu8Rqvq8vUKp/LJ7e/pH1ro4dVyeRuOMCpgrCCpgrZg2Tg+PytR75/wBvKrlfrO8qmODw/K1Hvn/byq5X6zvKrVsX0FSBWMFSULK14SD2/wCzt60ir0OVg8JPhz9Xb1pFXQKvBnBUwVgBUwUH2rjL43NGsi43jELXop3NfqN2nshY3HLdbGCptKDDk95JNu9279i7AOWBpUw5BnBU2uWAFTDkHKjPYv6D+o5eh152gOD+g/qOXolSgREQEREBERAREQEREBavR+C9PUe2etoWrUngvT1PtnrHm024dswK+qC+grmdLqs7fEar6vL1Cqdy0e3v3n1q4c7T3DVeQl6hVOZbPb5OkfWujh1XJ5G44oKkCsQKkCtnO2fg6PyvR75/28iuV+s7yqY4OD8r0fp/28iuZ5xO8qtXxFK6gvqhZW3CSe3H6u3ryKuAVYvCV4U/V2deRVuCrzQzBymCsAKmCpGcOUw5YA5TDlAzgqYKwAqYKDOCpgrAHKYKDm0xwf0H9Ry9GLzjRnB/Qf1HL0cpQIiICIiAiIgIiICIiAtVpT2r01T7Z62papTeC9PU+2esebTbh2yXX26gCpArmdLqs7D3DVeQl6hVOZdPdEnSPrVxZ2HuGq8hL1Cqby8e6JOkfWV0cOq5PI3HDBUgViBUgVs520cGx+V6P0/7eRXPJrO9UtwaH5Xo/T/t5FdEms7yq1fEBUrqC+3ULK24SvCu8gzryKtAVZPCWe2O8gzryKtAVeaGUFSBWEFTDlIzAqYcsIKkCgzgqYKwBymCoGcFTaVgBUw5B2FCe/6D+o5ekV5syee/6D+o5ek1KBERAREQEREBERAREQFqdN4L09R7Z62xapTeC9PUe2esebTbh2+r6viLmdLqs6z3FVeQk6pVN5f8Yk6R9ZVx51+JVPkJOqVTmX/GJOk71ro4dOTyNxwLqQKxr6CtnO2rgz/vij+0ft5FdMms7yqU4Mv74pPT/t5Fdcms7yq1fFFERQsrXhL8I7yDOvIqyCszhL8I7yDOvIqyV5oTBUgViCkCpGUFTBWEFSBQZmlTBWEFSBQZwVMOWAFTDlA7PJp7/oP6jl6WXmfJRxf5N/UcvTClAiIgIiICIiAiIgIiIC1OmPa909R7Z62xafSO8PEe/p6mcOG0NfIZGHzsew+dY82m3DtmREXM6XU51+JVXkJeqVTWXHXnkI2uJFwQdfIdSurOGnMlLPG3vnwyNG8tICpTLB0pS8apOzbudiPWujh05PI3HBRfEWznbTwYD5XpOYTk4/4Dx59auyTWd6oXMeubBlOileQGCV0bidnGRvjH6uCvqQYn71Wr4ooiKFlZ8JjhxpG0wNtgbYPft86rNWfwnxHTYdksTmg/87HAhv3Ocf8AKVWCvNAiIpH26kCoL6CgyAqYKxAqQKDMCpArCCpgoO0yU+xff+Rw1E4lpC9OLzPm5TmSaOMAkzSMhAH+IdAnzBxJ5gV6YRAiIgIiICIiAiIgIiIC1/L+QpJJBVUsjYqlrAx7XgmGojBJDJLC4IubOF7XOBwtsCKLJZ1Uy2XuNN0qoHRdR1FxrcwQvYeieMvbeApaU/0Wp/Dj/wB63BFn8OLT5smnO44i3wWp/Dj/AN60HOLMepfI6Snpagte4udFowtLXE3JYS+2JN7G2JOKu9FOPHMdK5Z/lOq88Dg7ykf+HnbzOjgv/plIX34ucpfMy/hxe8XoZFoy/F54fwb5RItxEv4cXvFvGbkuWIGNhq6GpqWMAayaP4MJABseHSi++91Z6KOkydNVbPLtpKwcxih/pIvvHS/Rav8ACi94tpROoloGcWSjVwmJ9LVg3DmPEUQcx41OHZ//AEEhVtU8HuUtMgUlQRskY2n0XDna6UFp+/evRCKR50HBvlL5if8ADh96nxb5S+Yn/Dh96vRaIPOnxb5S+Yn/AA4fer6ODbKXzE34cPvV6KRB51+LjKXzE/4cPvV9HBzlL5if8OH3q9Eog87/ABd5T+jzn0cPvVKn4O8plzQaaYX1ktpw1u88b6gV6GRBoeYXB+KNwqalzZahoIiay5igBFiQSAXPIJF7CwJA1knfERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREH//2Q=='],
            ['id' => 2, 'name' => 'Galaxy S10+', 'price' => 599, 'img' => 'https://www.fastshop.com.br/wcsstore/FastShopCAS/imagens/_CL_Celular/SGSMG975FZBCO/V2/SGSMG975FZBCO_PRD_447_1.jpg'],
            ['id' => 3, 'name' => 'MacBook Pro', 'price' => 1599, 'img' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp13touch-space-select-201807?wid=1808&hei=1680&fmt=jpeg&qlt=80&.v=1529520060550'],
            ['id' => 4, 'name' => 'IMac Pro', 'price' => 2599, 'img' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/imacpro-27-retina-config-hero?wid=824&hei=704&fmt=jpeg&qlt=80&.v=1512501389796'],
        ];
    }

    public static function getProduct($id)
    {
        $products = array_filter(Product::getProducts(), function($prod) use ($id) {
            return $prod['id'] == $id;
        });

        return reset($products);
    }
}
