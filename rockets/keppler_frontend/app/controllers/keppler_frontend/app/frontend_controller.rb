require_dependency "keppler_frontend/application_controller"

module KepplerFrontend
  class App::FrontendController < App::AppController
    include FrontsHelper
    layout 'layouts/keppler_frontend/app/layouts/application'

    def reservations
      @reservation = KepplerBooking::Reservation.new()
    end

    def create_reservation
      @reservation = KepplerBooking::Reservation.new(reservation_params)

      if @reservation.save
        #EventMailer.reservation_admin(@reservation).deliver_now
        #EventMailer.reservation_user(@reservation).deliver_now
        redirect_to root_path, notice: 'Su solicitud de reserva ha sido enviada exitósamente. Pronto será contactado(a) por un ejecutivo para su confirmación'
      else
        render :reservations
      end
    end

    def reservations_find_room
      @target = params[:target_id]
      @find_room = KepplerBooking::Room.find(params[:room_id])
      respond_to do |format|
        format.js {}
      end
    end

    private
      def reservation_params
        params.require(:reservation).permit(:name, :email, :documentation, :total_price, :phone, :adults, :status, :kids, :babies, :origin, :motive, :checkin, :checkout, :payment, :observations, orders_attributes: [:id, :room_id, :quantity, :quantity_people, :_destroy])
      end
    
  end
end
