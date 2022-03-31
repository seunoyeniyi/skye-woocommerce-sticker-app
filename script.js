
function get_sticker_board_width(val)
{

    return Math.round(val * 25.23809523809523);
    if (val == 1) {
        return 25;
    } else if (val == 2) {
        return 51;
    } else if (val == 3) {
        return 76;
    } else if (val == 4) {
        return 102;
    } else if (val == 5) {
        return 127;
    } else if (val == 8) {
        return 203;
    } else {
        return 51;
    }
}
function get_sticker_board_height(val)
{
    return get_sticker_board_width(val);
}