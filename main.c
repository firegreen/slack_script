#include "beaujeu.h"
#include "tryhard.h"

int main()
{
	if(tryhard_not_asked()){
		return do_beaujeu();
	}
	else{
		return do_beaujeu_mais_un_peu_moins();
	}
}

