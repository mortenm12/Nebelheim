function loadAbility(abilityName, xpList, cost)
{
    document.getElementById('abilityName').innerHTML = abilityName;
    document.getElementById('cost').value = cost;
    document.getElementById('total').innerHTML = cost;

    xps = document.getElementById('xps').children;

    for(i in xps)
    {
        if(xps[i].id != 'header' && xps[i].id != 'footer')
        {
            if(xps[i].classList != undefined)
            {
                xps[i].classList.add('d-none');
            }
        }
    }
    document.getElementById('Baby XP').classList.remove('d-none');

    for(i in xpList)
    {
        document.getElementById(xpList[i]['xp_type']).classList.remove('d-none');
    }

    reset();

}

function reset()
{
    xps = document.getElementById('xps').children;

    for(i in xps)
    {
        if(xps[i].id != 'header' && xps[i].id != 'footer')
        {
            if(xps[i].classList != undefined)
            {
                document.getElementById(xps[i].id + 'brugt').value = 0;
                document.getElementById(xps[i].id + 'tilbage').innerHTML = document.getElementById(xps[i].id + 'brugt').max;
            }
        }
    }
    
    document.getElementById('buy').classList.add('btn-secondary');
    document.getElementById('buy').classList.add('disabled');
    document.getElementById('buy').classList.remove('btn-primary');
}

function updateBack(xpType)
{
    brugt = document.getElementById(xpType + 'brugt').value;
    max = document.getElementById(xpType + 'brugt').max;
    document.getElementById(xpType + 'tilbage').innerHTML = max - brugt;

    xps = document.getElementById('xps').children;
    total = parseInt(document.getElementById('cost').value);

    for(i in xps)
    {
        if(xps[i].id != 'header' && xps[i].id != 'footer')
        {
            if(xps[i].classList != undefined)
            {
                if(!xps[i].classList.contains('d-none'))
                {
                    total -= parseInt(document.getElementById(xps[i].id + 'brugt').value);
                }
            }
        }
    }

    if(total < 0) {
        document.getElementById(xpType + 'brugt').value -= parseInt(1);
        document.getElementById(xpType + 'tilbage').innerHTML = max - brugt +1;
    }

    else {
        document.getElementById('total').innerHTML = total;
        if(total == 0) {
            document.getElementById('buy').classList.remove('btn-secondary');
            document.getElementById('buy').classList.remove('disabled');
            document.getElementById('buy').classList.add('btn-primary');
        }
        else {
            document.getElementById('buy').classList.add('btn-secondary');
            document.getElementById('buy').classList.add('disabled');
            document.getElementById('buy').classList.remove('btn-primary');
        }
    }


}

